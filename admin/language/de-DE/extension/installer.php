<?php
/**
 * @package		Arastta eCommerce
 * @copyright	Copyright (C) 2015 Arastta Association. All rights reserved. (arastta.org)
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

// Heading
$_['heading_title']          = 'Erweiterungen Installieren';

// Text
$_['text_success']           = 'Erweiterung erfolgreich installiert.';
$_['text_uninstall_success'] = 'Erweiterung erfolgreich deinstalliert.';
$_['text_unzip']             = 'Entpacke Dateien';
$_['text_ftp']               = 'Kopiere Dateien';
$_['text_sql']               = 'Führe SQL-Befehle aus';
$_['text_xml']               = 'Wende Anpassungen an';
$_['text_php']               = 'Führe PHP aus';
$_['text_json']              = 'Lese Daten ..';
$_['text_remove']            = 'Entferne temporäre Dateien';
$_['text_clear']             = 'Temporäre Dateien erfolgreich entfernt';
$_['text_modification']      = 'Die Anwendung der Anpassungen kann etwas dauern .. bitte warten ..';

// Entry
$_['entry_upload']           = 'Lade Datei hoch';
$_['entry_overwrite']        = 'Dateien welche überschrieben werden';
$_['entry_progress']         = 'Ausführen';

// Help
$_['help_upload']            = 'Benötigt entweder eine <b>.zip oder .xml</b> Datei, die Endung muss lauten <b>.ocmod.zip</b> oder <b>.ocmod.xml</b><br />War das Hochladen erfolgreich, muß um die Anpassungen anzuwenden anschließend das Menü <i>Anpassungen</i> aufgerufen werden, die gewünschte Anpassung auswählen und den Button <i>Aktualisieren</i> anklicken';

// Error
$_['error_permission']       = 'Keine Rechte für diese Aktion.';
$_['error_temporary']        = 'Achtung: es befinden sich einige temporäre Dateien im Verzeichnis, zum Löschen den Button <b>Bereinigen</b> anklicken';
$_['error_download']         = 'Datei konnte nicht geladen werden';
$_['error_upload']           = 'Datei konnte nicht hochgeladen werden';
$_['error_filetype']         = 'Ungültige Dateiart';
$_['error_file']             = 'Datei nicht gefunden';
$_['error_unzip']            = 'Zipdatei konnte nicht geöffnet werden';
$_['error_code']             = 'Anpassung erfordert eine eindeutige Identifikationsnummer in der XML-Datei';
$_['error_exists']           = 'Die bereits gespeicherte Erweiterung <b>%s</b> verwendet dieselbe Identifikationsnummer als diejenige welche versucht wird hochzuladen.<br />Mit Klick auf <b>Weiter</b> werden vorhandene Daten aktualisiert.';
$_['error_directory']        = 'Ordner <b>upload</b> mit Dateien zum hochladen konnte nicht gefunden werden';
$_['error_ftp_status']       = 'Hochladen nicht möglich - FTP muss in der <a href="index.php?route=setting/store&token=\' . $_SESSION[\'token\'] . \'">Systemsteuerung</a> aktiviert sein';
$_['error_ftp_connection']   = 'FTP-Verbindung zu <b>%s:%s</b> nicht möglich';
$_['error_ftp_login']        = 'FTP-Anmeldung als <b>%s</b> nicht möglich';
$_['error_ftp_root']         = 'Hauptverzeichnis <b>%s</b> konnte nicht bestimmt werden';
$_['error_ftp_directory']    = 'Verzeichniswechsel nach <b>%s</b> nicht möglich';
$_['error_ftp_file']         = 'Datei <b>%s</b> konnte nicht hochgeladen werden';
$_['error_copy_xmls_file']   = 'Konnte die XML-Datei nicht kopieren, bitte Datei überprüfen';
$_['error_uninstall_already']= 'Wurde bereits deinstalliert';
$_['error_zip']              = 'Achtung: erforderliche ZIP-Erweiterung am Server ist nicht aktiviert. Bitte an den Anbieter für weitere Hilfe wenden.';
$_['error_xml']              = 'Achtung: erforderliche XML-Erweiterung am Server ist nicht aktiviert. Bitte an den Anbieter für weitere Hilfe wenden.';
$_['error_json_1']           = 'Maximale Verschachtelungstiefe erreicht.';
$_['error_json_2']           = 'Dateistruktur fehlerhaft.';
$_['error_json_3']           = 'Unerwarteter Code gefunden.';
$_['error_json_4']           = 'Syntaxfehler in der Datei.';
$_['error_json_5']           = 'Ungültige UTF-8-Zeichen, Daten eventuell mit falschem Zeichensatz gespeichert.';
$_['error_language_exist']   = 'Sprache ist bereits installiert.';