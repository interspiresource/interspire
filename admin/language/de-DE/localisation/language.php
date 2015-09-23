<?php
/**
 * @package		Arastta eCommerce
 * @copyright	Copyright (C) 2015 Arastta Association. All rights reserved. (arastta.org)
 * @credits		See CREDITS.txt for credits and other copyright notices.
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

// Heading
$_['heading_title']     = 'Sprache';

// Text
$_['text_success']      = 'Datensatz erfolgreich geändert.';
$_['text_list']         = 'Übersicht';
$_['text_add']          = 'Neu';
$_['text_edit']         = 'Bearbeiten';
$_['text_upload']       = 'Sprache hochladen';

// Column
$_['column_action']     = 'Aktion';

// Entry
$_['entry_name']        = 'Name';
$_['entry_code']        = 'Code';
$_['entry_image']       = 'Bild';
$_['entry_directory']   = 'Ordner';
$_['entry_status']      = 'Status';
$_['entry_sort_order']  = 'Reihenfolge';

// Help
$_['help_code']         = 'Nicht ändern wenn dies die Standardsprache ist.<br />Wird u.a. zur Sprachenkennung im Browser verwendet und muss XHTML-Konform sein.<br />Beispiel: de, de-DE oder de_DE';
$_['help_image']        = 'Wird zur Anzeige der Flaggen verwendet.<br />Sollte nicht größer als 16x16px sein und als .png vorliegen';
$_['help_directory']    = 'Verzeichnis in welchem sich die Sprachdateien befinden (Groß-/Kleinschreibung beachten)<br />Beispiel: de-DE [Standard] oder de';
$_['help_status']       = 'Im Shop bei Sprachenauswahl zeigen/verbergen';

// Error
$_['error_permission']  = 'Keine Rechte für diese Aktion.';
$_['error_name']        = 'Name muss zwischen 3 und 32 Buchstaben lang sein.';
$_['error_code']        = 'Sprachcode muss aus mindestens zwei Buchstaben bestehen.';
$_['error_image']       = 'Name der Bilddatei muss zwischen 3 und 64 Zeichen lang sein.';
$_['error_directory']   = 'Verzeichnis erforderlich.';
$_['error_default']     = 'Sprache kann nicht gelöscht werden da als Standardsprache des Shops definiert.';
$_['error_admin']       = 'Sprache ist aktuell die Standardsprache der Verwaltung und kann daher nicht gelöscht werden.';
$_['error_store']       = 'Sprache kann nicht gelöscht werden da sie aktuell %s Shop(s) zugeordnet ist.';
$_['error_order']       = 'Sprache kann nicht gelöscht werden weil sie noch %s Auftrag/Aufträgen zugeordnet ist.';