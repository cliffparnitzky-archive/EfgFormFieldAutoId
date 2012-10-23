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

/**
 * Form fields
 */
$GLOBALS['TL_LANG']['FFL']['autoId'] = array('Auto id field', 'A field automatic generatic an id for each record.');

// fields
$GLOBALS['TL_LANG']['tl_form_field']['autoIdStartValue']          = array('Startvalue', 'Set the value, which should be uses as automatic id for the first record. The largest possible value for an auto id is 2.147.483.648 (2<sup>31</sup>). If this value is reached, a determination of a new auto id is not possible.');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdIncrementValue']      = array('Increment value', 'Set the value, by which the last automatic id should be incremented to determine the next automatic id. Please note if <i>start value</i> and <i>increment value</i> are very high, only a certain number of auto ids is possible.');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdDigitGrouping']       = array('Use digit grouping', 'If you choose this option, the auto id value will be stored with digit grouping (e.g. <i>1,000,512</i>).');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']  = array('Thousands separator', 'Select the thousands separator, which should be used for digit grouping.');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdShowWhileCreation']   = array('Show while creating a new record', 'If you choose this option, the auto id field will also be displayed, while creating a new record (otherwise it is only visible when editing).');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdAutoCreationMessage'] = array('Message about auto id creation', 'Set a message, that should be displayed in the auto id field while creating a new record, to inform the user about automatic id creation.');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdPrefix']              = array('Prefix for auto id value', 'Set a text, which should be precended to the auto id value before storing.');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdPrefixAddBlank']      = array('Insert blank after prefix', 'If you choose this option, a blank will be inserted between prefix and auto id value (only if a prefix is set).');

// options
$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['point'] = 'Poiut (.)';
$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['comma'] = 'Comma (,)';
$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['blank'] = 'Blank ( )';
$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['quote'] = 'Simple quote (\')';


?>