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
$GLOBALS['TL_LANG']['tl_form']['autoIdActive']     = array('Automatische Id erzeugen', 'Wenn Sie diese Option wählen, wird beim Speichern der Daten (im Backend-Modul "Formular-Daten") automatisch eine Id für jeden Datensatz erzeugt.');
$GLOBALS['TL_LANG']['tl_form']['autoIdField']      = array('Auto Id Feld', 'Wählen Sie das Feld des Formulars aus, welches für die Speicherung der Auto Id verwendet werden soll.');
$GLOBALS['TL_LANG']['tl_form']['autoIdStartValue'] = array('Startwert', 'Wählen Sie ein Wert, der für die automatische Id des ersten Datensatzes verwendet werden soll. Das größte mögliche Wert für einen Auto Id ist 2.147.483.648 (2<sup>31</sup>).');

// legends
$GLOBALS['TL_LANG']['tl_form']['autoid_legend'] = "(EFG) Automatische Id Erzeugung";
 
?>
