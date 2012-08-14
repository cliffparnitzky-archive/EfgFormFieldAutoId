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
$GLOBALS['TL_LANG']['tl_form']['autoIdActive']     = array('Generate automatic id', 'If you choose this option, each record will get an automatic id when storing the data (in database "Form data").');
$GLOBALS['TL_LANG']['tl_form']['autoIdField']      = array('Auto id field', 'Select the field of the form, which should be used for storing the automatic id.');
$GLOBALS['TL_LANG']['tl_form']['autoIdStartValue'] = array('Startvalue', 'Set the value, which should be uses as automatic id for the first record.');

// legends
$GLOBALS['TL_LANG']['tl_form']['autoid_legend'] = "(EFG) Automatic id generation";
 
?>
