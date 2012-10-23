<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
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
 * @copyright  Cliff Parnitzky 2012
 * @author     Cliff Parnitzky
 * @package    EfgFormFieldAutoId
 * @license    LGPL
 */

// fields
$GLOBALS['TL_DCA']['tl_form_field']['fields']['autoIdStartValue'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdStartValue'],
	'exclude'                 => true,
	'filter'                  => false,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50', 'rgxp'=>'digit', 'maxlength'=>10)
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['autoIdIncrementValue'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdIncrementValue'],
	'exclude'                 => true,
	'filter'                  => false,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50', 'rgxp'=>'digit', 'maxlength'=>10)
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['autoIdDigitGrouping'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdDigitGrouping'],
	'exclude'                 => true,
	'filter'                  => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'clr w50 m12')
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['autoIdThousandsSeparator'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator'],
	'exclude'                 => true,
	'filter'                  => false,
	'inputType'               => 'select',
	'options'                 => array
	                             (
								     'point' => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['point'],
									 'comma' => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['comma'],
									 'blank' => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['blank'],
									 'quote' => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['quote']
	                             ),
	'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['autoIdShowWhileCreation'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdShowWhileCreation'],
	'exclude'                 => true,
	'filter'                  => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50 clr m12')
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['autoIdAutoCreationMessage'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdAutoCreationMessage'],
	'exclude'                 => true,
	'filter'                  => false,
	'inputType'               => 'textarea',
	'eval'                    => array('rte'=>'tinyMCE', 'allowHtml'=>true, 'tl_class'=>'clr')
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['autoIdPrefix'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdPrefix'],
	'exclude'                 => true,
	'filter'                  => false,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>30, 'tl_class'=>'w50 clr')
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['autoIdPrefixAddBlank'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdPrefixAddBlank'],
	'exclude'                 => true,
	'filter'                  => false,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12',)
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['autoIdAdditionalSqlWhere'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['autoIdAdditionalSqlWhere'],
	'exclude'                 => true,
	'filter'                  => false,
	'inputType'               => 'textarea',
	'eval'                    => array('tl_class'=>'clr')
);

// Palettes
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'autoIdDigitGrouping';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'autoIdShowWhileCreation';

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['autoId'] = '{type_legend},type,name,label;{options_legend},autoIdStartValue,autoIdIncrementValue,autoIdDigitGrouping,autoIdShowWhileCreation,autoIdPrefix,autoIdPrefixAddBlank,autoIdAdditionalSqlWhere;{expert_legend:hide},class';

// Subpalettes
array_insert($GLOBALS['TL_DCA']['tl_form_field']['subpalettes'], count($GLOBALS['TL_DCA']['tl_form_field']['subpalettes']),
	array('autoIdDigitGrouping' => 'autoIdThousandsSeparator')
);
array_insert($GLOBALS['TL_DCA']['tl_form_field']['subpalettes'], count($GLOBALS['TL_DCA']['tl_form_field']['subpalettes']),
	array('autoIdShowWhileCreation' => 'autoIdAutoCreationMessage')
);

?>