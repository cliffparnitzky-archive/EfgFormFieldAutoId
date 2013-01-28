<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>. 
 *
 * PHP version 5
 * @copyright  Cliff Parnitzky 2012-2013
 * @author     Cliff Parnitzky
 * @package    EfgFormFieldAutoId
 * @license    LGPL
 */

/**
 * Class EfgFormFieldAutoId
 *
 * @copyright  Cliff Parnitzky 2012-2013
 * @author     Cliff Parnitzky
 * @package    Controller
 */
class EfgFormFieldAutoId extends Backend {
	/**
	 * Execute hook 'processEfgFormData' to generate the automatic id before storing the record.
	 */
	public function generateAutoId($arrToSave, $arrFiles, $intOldId, $arrForm, $arrLabels=null) {
		if ($arrForm['autoIdActive'] && $intOldId == 0) {
			$autoIdFieldName = $arrForm['autoIdField'];
			
			$digitGrouping = false;
			$thousandsSeparator = '';
			$prefix = '';
			$objField = $this->Database->prepare("SELECT * FROM tl_form_field WHERE pid = ? AND name = ? AND type = ?")
						->limit(1)
						->execute(array($arrForm['id'], $autoIdFieldName, 'autoId'));
		
			$autoId = $objField->autoIdStartValue;
			$digitGrouping = strlen($objField->autoIdDigitGrouping) > 0;
			$thousandsSeparator = $GLOBALS['TL_AUTO_ID']['THOUSANDS_SEPARATOR'][$objField->autoIdThousandsSeparator];
			$prefix = $objField->autoIdPrefix;
			
			if (strlen($objField->autoIdPrefixAddBlank) > 0) {
				$prefix .= " ";
			}
			
			$additionalSQLWhere = "";
			if (strlen($objField->autoIdAdditionalSqlWhere) > 0) {
				$additionalSQLWhere = "AND " . $objField->autoIdAdditionalSqlWhere;
				$additionalSQLWhere = str_replace("{{autoid}}", "fdd.value", $additionalSQLWhere);
			}
			
			$queryString = "SELECT fdd.value AS id FROM tl_formdata_details fdd "
						 . "JOIN tl_formdata fd ON fd.id = fdd.pid "
						 . "JOIN tl_form f ON f.title = fd.form "
						 . "WHERE f.id = ? AND fdd.ff_name = ? " . $additionalSQLWhere
						 . "ORDER BY LENGTH(fdd.value) DESC, fdd.value DESC";
						 
			$lastId = $this->Database->prepare($queryString)
							->limit(1)
							->execute(array($arrForm['id'], $autoIdFieldName));
			
			if ($lastId->numRows > 0 && $lastId->next() && strlen($lastId->id) > 0) {
				$autoId = $lastId->id;
				
				// remove prefix
				if (strlen($prefix) > 0) {
					$autoId = substr($autoId, strlen($prefix), strlen($autoId));
				}
				// remove digit grouping
				if ($digitGrouping && strlen($thousandsSeparator) > 0) {
					$autoId = str_replace($thousandsSeparator, '', $autoId);
				}
				
				// increment value
				$autoId = intval($autoId) + $objField->autoIdIncrementValue;
			}
			
			// if th last id is smaller than the start value something was manipulated in the db
			if ($autoId < $arrForm['autoIdStartValue']) {
				$autoId = $arrForm['autoIdStartValue'];
			}
				
			// add digit grouping
			if ($digitGrouping && strlen($thousandsSeparator) > 0) {
				// add zeros to the start for consistent chunk length
				$missingChars = (((floor((strlen($autoId) - 1) / 3) * 3) + 3) - (strlen($autoId)));
				$missingZeros = "";
				for ($i = 0; $i < $missingChars; $i++) {
					$missingZeros .= "0";
				}
				$autoId = $missingZeros . $autoId;

				// split the string into consistent chunks of length 3
				$arrChunks = str_split($autoId, 3);
				// combine the chunks with adding the thousands separator
				$autoId = implode($thousandsSeparator, $arrChunks);

				// remove the added zeros
				$autoId = substr($autoId, $missingChars, strlen($autoId));
			}
			
			// add prefix
			$autoId = $prefix . $autoId;
				
			$arrToSave[$autoIdFieldName] = $autoId;
		}
		return $arrToSave;
	}
	
	/**
	 * Execute hook 'validateFormField' to generate the field.
	 */
	public function loadAutoIdField(Widget $objWidget, $strForm, $arrForm) {
		$this->import("Input");
		
		$isEditMode = strlen($this->Input->get("details")) > 0;
		if ($objWidget instanceof FormAutoId && !$isEditMode) {
			if (!$objWidget->autoIdShowWhileCreation) {
				return new FormAutoIdEmpty();
			}
		}
		return $objWidget; 
	}
	
	/**
	 * Return all possible 'autoId' form fields as array
	 * @return array
	 */
	public function getAutoIdFields() {
		$fields = array();

		// Get all 'autoId' form fields which can be used to store the generated id
		$obFormFields = $this->Database->prepare("SELECT * FROM tl_form_field WHERE type = ? AND pid=? ORDER BY label, name ASC")
							->execute(array('autoId', $this->Input->get('id')));

		while ($obFormFields->next()) {
			$strClass = $GLOBALS['TL_FFL'][$obFormFields->type];

			// Continue if the class is not defined
			if (!$this->classFileExists($strClass)) {
				continue;
			}
			
			// Continue if the class is not an input submit
			$widget = new $strClass;
			if (!$widget->submitInput() && !$widget instanceof FormFileUpload) {
				continue;
			}
			
			$fields[$obFormFields->name] = ((strlen($obFormFields->label) > 0) ? $obFormFields->label . " [" . $GLOBALS['TL_LANG']['tl_form_field']['name'][0] . ": " . $obFormFields->name . " / " : $obFormFields->name . " [") . $GLOBALS['TL_LANG']['tl_form_field']['type'][0] . ": " . $GLOBALS['TL_LANG']['FFL'][$obFormFields->type][0] . "]";
		}

		return $fields;
	} 
}

?>