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
 * Front end form fields
 */
$GLOBALS['TL_FFL']['autoId'] = 'FormAutoId';
$GLOBALS['BE_FFL']['autoId'] = 'FormAutoId';

/**
 * Adding field type to storabel fields.
 */
$GLOBALS['EFG']['storable_fields'][] = 'autoId';

/**
 * Adding hooks
 */
$GLOBALS['TL_HOOKS']['processEfgFormData'][] = array('EfgFormFieldAutoId', 'generateAutoId');
$GLOBALS['TL_HOOKS']['loadFormField'][] = array('EfgFormFieldAutoId', 'loadAutoIdField');

/**
 * Characters for thousands separator
 */
$GLOBALS['TL_AUTO_ID']['THOUSANDS_SEPARATOR']['point'] = '.';
$GLOBALS['TL_AUTO_ID']['THOUSANDS_SEPARATOR']['comma'] = ',';
$GLOBALS['TL_AUTO_ID']['THOUSANDS_SEPARATOR']['blank'] = ' ';
$GLOBALS['TL_AUTO_ID']['THOUSANDS_SEPARATOR']['quote'] = '\'';

?>