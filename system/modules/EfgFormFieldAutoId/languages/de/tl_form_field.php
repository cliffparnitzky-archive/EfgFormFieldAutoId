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
$GLOBALS['TL_LANG']['FFL']['autoId'] = array('Auto Id Feld', 'Ein Feld das automatisch eine Id für jeden Datensatz generiert.');

// fields
$GLOBALS['TL_LANG']['tl_form_field']['autoIdStartValue']          = array('Startwert', 'Wählen Sie ein Wert, der für die automatische Id des ersten Datensatzes verwendet werden soll. Der größte mögliche Wert für einen Auto Id ist 2.147.483.648 (2<sup>31</sup>). Beim Erreichen dieses Wertes ist keine Ermittlung einer neuen Auto Id mehr möglich.');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdIncrementValue']      = array('Inkrementwert', 'Wählen Sie ein Wert, um den die letzten automatische Id inkrementiert werden soll zur Ermittlung der nächsten automatischen Id. Beachten Sie, dass bei einem entsprechend hohem <i>Startwert</i> und ebenso hohem <i>Inkrementwert</i> nur eine bestimme Anzahl von Auto Ids möglich ist.');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdDigitGrouping']       = array('Zifferngruppierung verwenden', 'Wenn Sie diese Option wählen, wird der Auto Id Wert mit Zifferngruppierung gespeichert (z.B. <i>1.000.512</i>).');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']  = array('Tausendertrennzeichen', 'Wählen Sie das Tausendertrennzeichen, welches Zifferngruppierung verwendet werden soll.');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdShowWhileCreation']   = array('Beim Anlegen eines Datensatzes anzeigen', 'Wenn Sie diese Option wählen, wird das Auto Id Feld im Formular auch angezeigt, wenn ein Datensatz neu angelegt wird (sonst ist es nur beim Bearbeiten sichtbar).');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdAutoCreationMessage'] = array('Meldung über Auto Id Erzeugung', 'Wählen Sie eine Meldung, die beim Anlegen eines Datensatze im Auto Id Feld angezeigt, um den Benutzer über die automitische Erzeugung der zu informieren.');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdPrefix']              = array('Präfix für den Auto Id Wert', 'Wählen Sie einen Text, der dem Auto Id Wert beim Speichern vorangestellt werden soll.');
$GLOBALS['TL_LANG']['tl_form_field']['autoIdPrefixAddBlank']      = array('Leerzeichen nach Präfix einfügen', 'Wenn Sie diese Option wählen, wird zwischen Präfix und Auto Id Wert ein Leerzeichen eingefügt (nur wenn ein Präfix gesetzt ist).');

// options
$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['point'] = 'Punkt (.)';
$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['comma'] = 'Komma (,)';
$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['blank'] = 'Leerzeichen ( )';
$GLOBALS['TL_LANG']['tl_form_field']['autoIdThousandsSeparator']['quote'] = 'Einfaches Anführungszeichen (\')';

?>