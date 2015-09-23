<?php
/**
 * @package		Arastta eCommerce
 * @copyright	Copyright (C) 2015 Arastta Association. All rights reserved. (arastta.org)
 * @credits		See CREDITS.txt for credits and other copyright notices.
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

// Heading
$_['heading_title']                         = 'Export / Import';

// Text
$_['text_list']                             = 'Ex- &amp; Import';
$_['text_success']                          = 'Daten erfolgreich importiert.';
$_['text_success_settings']                 = 'Einstellungen erfolgreich bearbeitet.';
$_['text_export_type_category']             = 'Kategorien';
$_['text_export_type_product']              = 'Produkte (inklusive aller Optionen)';
$_['text_export_type_option']               = 'Optionswerte';
$_['text_export_type_attribute']            = 'Eigenschaften';
$_['text_yes']                              = 'Ja';
$_['text_no']                               = 'Nein';
$_['text_nochange']                         = 'Es wurden keine Servereinstellungen geändert';
$_['text_log_details']                      = 'Siehe auch <b>System > Berichte</b> für weitere Details';
$_['text_loading_notifications']            = 'Hole Benachrichtigungen';
$_['text_retry']                            = 'Nochmal versuchen';

// Entry
$_['entry_import']                          = 'Daten von XLS, XLSX oder ODS importieren';
$_['entry_export']                          = 'Daten in eine Exceltabelle (XLSX) exportieren';
$_['entry_export_type']                     = 'Welche Daten sollen exportiert werden';
$_['entry_range_type']                      = 'Welcher Bereich soll exportiert werden';
$_['entry_start_id']                        = 'Erste Nummer';
$_['entry_start_index']                     = 'Anzahl pro Durchgang';
$_['entry_end_id']                          = 'Letzte Nummer';
$_['entry_end_index']                       = 'Durchgangsnummer';
$_['entry_incremental']                     = 'Verwende aufsteigenden Import';
$_['entry_upload']                          = 'Datei zum Hochladen auswählen';
$_['entry_settings_use_option_id']          = 'Verwende <b>option_id</b> anstatt <b>option name</b> in den Tabellen "ProductOptions" und "ProductOptionValues"';
$_['entry_settings_use_option_value_id']    = 'Verwende <b>option_value_id</b> anstatt <b>option_value name</b> in der Tabelle "ProductOptionValues"';
$_['entry_settings_use_attribute_group_id'] = 'Verwende <b>attribute_group_id</b> anstatt <b>attribute_group name</b> in der Tabelle "ProductAttributes"';
$_['entry_settings_use_attribute_id']       = 'Verwende <b>attribute_id</b> anstatt <b>attribute name</b> in der Tabelle "ProductAttributes"';
$_['entry_settings_use_export_cache']       = 'Verwende phpTemp Cache für große Exporte (kann etwas langsamer sein)';
$_['entry_settings_use_import_cache']       = 'Verwende phpTemp Cache für große Importe (kann etwas langsamer sein)';

// Error
$_['error_permission']                      = 'Keine Rechte für diese Aktion.';
$_['error_upload']                          = 'Hochgeladene Datei kann nicht validiert werden.';
$_['error_categories_header']               = 'Ungültige Kopfdaten in der Tabelle "Kategorien"';
$_['error_products_header']                 = 'Ungültige Kopfdaten bei den Produkten';
$_['error_additional_images_header']        = 'Ungültige Kopfdaten in der Tabelle "zusätzliche Bilder"';
$_['error_specials_header']                 = 'Ungültige Kopfdaten in der Tabelle "Angebote"';
$_['error_discounts_header']                = 'Ungültige Kopfdaten in der Tabelle "Rabatte"';
$_['error_rewards_header']                  = 'Ungültige Kopfdaten In der Tabelle "Bonuspunkte"';
$_['error_product_options_header']          = 'Ungültige Kopfdaten in der Tabelle "Produktoptionen"';
$_['error_product_option_values_header']    = 'Ungültige Kopfdaten in der Tabelle "Produktoptionswerte"';
$_['error_options_header']                  = 'Ungültige Kopfdaten in der Tabelle "Optionen"';
$_['error_option_values_header']            = 'Ungültige Kopfdaten in der Tabelle "Optionswerte"';
$_['error_attribute_groups_header']         = 'Ungültige Kopfdaten bei den Eigenschaftsgruppen';
$_['error_attributes_header']               = 'Ungültige Kopfdaten bei den Eigenschaften';
$_['error_product_options']                 = 'Entweder keine Produktdaten vorhanden oder Produktdaten nicht vor den Produktoptionen';
$_['error_product_option_values']           = 'Entweder keine Produktdaten vorhanden oder Produktdaten nicht vor den Produktoptionswerten';
$_['error_product_option_values_2']         = 'Entweder keine Produktoptionen vorhanden oder Optionen nicht vor den Optionswerten';
$_['error_product_option_values_3']         = 'Keine Produktoptionswerte nach den Produktoptionen vorhanden';
$_['error_additional_images']               = 'Entweder keine Produkte vorhanden oder nicht vor den zusätzlichen Bildern';
$_['error_specials']                        = 'Entweder keine Produkte vorhanden oder nicht vor den Angeboten';
$_['error_discounts']                       = 'Entweder keine Produkte vorhanden oder nicht vor den Rabatten';
$_['error_rewards']                         = 'Entweder keine Produkte vorhanden oder nicht vor den Prämienpunkten.';
$_['error_product_attributes']              = 'Entweder keine Produkte vorhanden oder nicht vor den Produkteigenschaften.';
$_['error_attributes']                      = 'Entweder keine Eigenschaftsgruppen vorhanden oder nicht vor den Eigenschaften.';
$_['error_attributes_2']                    = 'Daten für Eigenschaften dürfen nicht vor Eigenschaftsgruppen angeordnet sein.';
$_['error_option_values']                   = 'Entweder keine Optionen vorhanden oder nicht vor den Optionswerten.';
$_['error_option_values_2']                 = 'Daten für Optionswerte dürfen nicht vor den Optionen angeordnet sein.';
$_['error_post_max_size']                   = 'Datei ist größer als %1 (siehe PHP-Einstellungen "post_max_size").';
$_['error_upload_max_filesize']             = 'Datei ist größer als %1 (siehe PHP-Einstellung "upload_max_filesize").';
$_['error_select_file']                     = 'Bitte eine Datei auswählen.';
$_['error_id_no_data']                      = 'Keine Daten zwischen erster und letzter Nummer.';
$_['error_page_no_data']                    = 'Keine weiteren Daten.';
$_['error_param_not_number']                = 'Werte müssen ganze Zahlen sein.';
$_['error_upload_name']                     = 'Kein Dateiname zum Upload angegeben.';
$_['error_upload_ext']                      = 'Datei muss eine der folgenden Endungen haben: <b>.xls .xlsx .ods</b>';
$_['error_no_news']                         = 'Keine Nachrichten.';
$_['error_batch_number']                    = 'Stapelnummer muss größer als 0 sein.';
$_['error_min_item_id']                     = 'Erste Nummer muss größer als 0 sein.';
$_['error_option_name']                     = 'Option <b>%1</b> ist mehrfach definiert!<br />Bitte im Reiter Einstellungen folgendes aktivieren:<br />Verwende <b>option_id</b> anstatt <b>option name</b> in Tabelle "ProductOptions" und "ProductOptionValues"';
$_['error_option_value_name']               = 'Optionswert \'%1\' ist mehrfach definiert!<br />Im Reiter Einstellungen folgendes aktivieren:<br />Verwende <b>option_value_id</b> anstatt <b>option_value name</b> in Tabelle "ProductOptionValues"';
$_['error_attribute_group_name']            = 'Eigenschaftsgruppe \'%1\' ist mehrfach definiert!<br />Im Reiter Einstellungen folgendes aktivieren:<br />Verwende <b>attribute_group_id</b> anstatt <b>attribute_group name</b> in Tabelle "ProductAttributes"';
$_['error_attribute_name']                  = 'Eigenschaft \'%1\' ist mehrfach definiert!<br />Im Reiter Einstellungen folgendes aktivieren:<br />Verwende <b>attribute_id</b> anstatt <b>attribute name</b> in Tabelle "ProductAttributes"';
$_['error_missing_customer_group']                      = 'Feld <b>customer_groups</b> fehlt in Tabelle <b>%1</b>';
$_['error_invalid_customer_group']                      = 'Feld <b>customer_group %2</b> in Tabelle <b>%1</b> nicht definiert';
$_['error_missing_product_id']                          = 'Feld <b>productt_ids</b> in Tabelle <b>%1</b> nicht vorhanden';
$_['error_missing_option_id']                           = 'Feld <b>option_ids</b> in Tabelle <b>%1</b> nicht vorhanden';
$_['error_invalid_option_id']                           = 'Feld <b>option_id %2</b> in Tabelle <b>%1</b> ungültig';
$_['error_missing_option_name']                         = 'Feld <b>option_names</b> fehlt in Tabelle <b>%1</b>';
$_['error_invalid_product_id_option_id']                = 'Feld <b>option_id %3</b> für <b>product_id %2</b> in Tabelle <b>%4</b> ungültig, aber definiert in Tabelle <b>%1</b>';
$_['error_missing_option_value_id']                     = 'Feld <b>option_value_ids</b> fehlt in Tabelle <b>%1</b>';
$_['error_invalid_option_id_option_value_id']           = 'Feld <b>option_value_id %3</b> für <b>option_id %2</b> in Tabelle <b>%1</b> ungültig';
$_['error_missing_option_value_name']                   = 'Feld <b>option_value_names</b> fehlt in Tabelle <b>%1</b>';
$_['error_invalid_option_id_option_value_name']         = 'Feld <b>option_value_name %3</b> für <b>option_id %2</b> ungültig in Tabelle <b>%1</b>'; 
$_['error_invalid_option_name']                         = 'Feld <b>option_name %2</b> ungültig in Tabelle <b>%1</b>';
$_['error_invalid_product_id_option_name']              = 'Feld <b>option_name %3</b> für <b>product_id %2</b> in Tabelle <b>%4</b>ungültig, aber verwendet in Tabelle <b>%1</b>';
$_['error_invalid_option_name_option_value_id']         = 'Feld <b>option_value_id %3</b> für <b>option_name %2</b> in Tabelle <b>%1</b> ungültig';
$_['error_invalid_option_name_option_value_name']       = 'Feld <b>option_value_name %3</b> für <b>option_name %2</b> in Tabelle <b>%1</b> ungültig';
$_['error_missing_attribute_group_id']                  = 'Feld <b>attribute_group_ids</b> in Tabelle <b>%1</b> fehlt';
$_['error_invalid_attribute_group_id']                  = 'Feld <b>attribute_group_id %2</b> in Tabelle <b>%1</b> fehlt';
$_['error_missing_attribute_group_name']                = 'Feld <b>attribute_group_names</b> in Tabelle <b>%1</b> fehlt';
$_['error_missing_attribute_id']                        = 'Feld <b>attribute_ids</b> in Tabelle <b>%1</b> fehlt';
$_['error_invalid_attribute_group_id_attribute_id']     = 'Feld <b>attribute_id %3</b> für <b>attribute_group_id %2</b> in Tabelle <b>%1</b> ungültig';
$_['error_missing_attribute_name']                      = 'Feld <b>attribute_names</b> in Tabelle <b>%1</b> fehlt';
$_['error_invalid_attribute_group_id_attribute_name']   = 'Feld <b>attribute_name %3</b> für <b>optiion_id %2</b> in Tabelle <b>%1</b> fehlt'; 
$_['error_invalid_attribute_group_name']                = 'Feld <b>attribute_group_name %2</b> in Tabelle <b>%1</b> fehlt';
$_['error_invalid_attribute_group_name_attribute_id']   = 'Feld <b>attribute_id %3</b> für <b>attribute_group_name %2</b > in Tabelle <b>%1</b> fehlt';
$_['error_invalid_attribute_group_name_attribute_name'] = 'Feld <b>attribute_name %3</b> für <b>attribute_group_name %2</b> in Tabelle <b>%1</b> fehlt';
$_['error_invalid_product_id']                          = 'Feld <b>product_id %2</b> un Tabelle <b>%1</b> ungültig';
$_['error_duplicate_product_id']                        = 'Feld <b>product_id %2</b> in Tabelle <b>%1</b> doppelt vorhanden';
$_['error_unlisted_product_id']                         = 'In Tabelle <b>%1</b> kann das Feld <b>product_id %2</b> nicht angewendet werden da es in der Tabelle <b>Products</b> nicht vorhanden ist';

// Tabs
$_['tab_import']                            = 'Import';
$_['tab_export']                            = 'Export';
$_['tab_settings']                          = 'Einstellungen';

// Button labels
$_['button_import']                         = 'Import';
$_['button_export']                         = 'Export';
$_['button_settings']                       = 'Aktualisieren';
$_['button_export_id']                      = 'Nach Nummernkreis';
$_['button_export_page']                    = 'Stapelverarbeitung';

// Help
$_['help_range_type']                       = '(Optional, leer lassen wenn keine Anwendung)';
$_['help_incremental_yes']                  = '(Aktualisieren und/oder hinzufügen)';
$_['help_incremental_no']                   = '(Vorhandene Daten löschen vor Import)';
$_['help_import']                           = 'Tabelle kann Kategorien, Produkte, Produkteigenschaften und/oder Optionen beinhalten';
$_['help_format']                           = 'Um sicher zu gehen dass richtige Datenformate angewendet werden, zuerst einen Export durchführen';