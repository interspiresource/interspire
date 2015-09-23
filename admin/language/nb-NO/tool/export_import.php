<?php
/**
 * @package		Arastta eCommerce
 * @copyright	Copyright (C) 2015 Arastta Association. All rights reserved. (arastta.org)
 * @credits		See CREDITS.txt for credits and other copyright notices.
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

// Heading
$_['heading_title']                         = 'Eksport og Import';

// Text
$_['text_list']                             = 'Eksport og import';
$_['text_success']                          = 'Data ble vellykket importert.';
$_['text_success_settings']                 = 'Endringer ble vellykket lagret.';
$_['text_export_type_category']             = 'Kategorier';
$_['text_export_type_product']              = 'Produkter (inkludert produktdata, valg, tilbud, rabatter, bonuspoeng og egenskaper)';
$_['text_export_type_option']               = 'Valg-definisjoner';
$_['text_export_type_attribute']            = 'Egenskap-definisjoner';
$_['text_yes']                              = 'Ja';
$_['text_no']                               = 'Nei';
$_['text_nochange']                         = 'Ingen data ble endret på server.';
$_['text_log_details']                      = 'Se også \'Feilmeldingslogger\' for mer informasjon.';
$_['text_loading_notifications']            = 'Henter meldinger';
$_['text_retry']                            = 'Forsøk igjen';

// Entry
$_['entry_import']                          = 'Importer fra en XLS, XLSX eller ODS-regnerarkfil';
$_['entry_export']                          = 'Eksporter forespurt data til en XLSX-regnerarkfil';
$_['entry_export_type']                     = 'Velg hvilke data som skal eksporteres:';
$_['entry_range_type']                      = 'Velg dataområde som skal eksporteres:';
$_['entry_start_id']                        = 'Start-id:';
$_['entry_start_index']                     = 'Antall per batch:';
$_['entry_end_id']                          = 'Stopp-id:';
$_['entry_end_index']                       = 'Batch-nummer:';
$_['entry_incremental']                     = 'Bruk trinnvis import';
$_['entry_upload']                          = 'Fil som skal lastes opp.';
$_['entry_settings_use_option_id']          = 'Bruk <em>option_id</em> i stede for <em>option name</em> i regnearkene \'ProductOptions\' og \'ProductOptionValues\'';
$_['entry_settings_use_option_value_id']    = 'Bruk <em>option_value_id</em> i stede for <em>option_value name</em> i regnearket \'ProductOptionValues\'';
$_['entry_settings_use_attribute_group_id'] = 'Bruk <em>attribute_group_id</em> i stede for <em>attribute_group name</em> i regnearket \'ProductAttributes\'';
$_['entry_settings_use_attribute_id']       = 'Bruk <em>attribute_id</em> i stede for <em>attribute name</em> i regnearkets \'ProductAttributes\'';
$_['entry_settings_use_export_cache']       = 'Bruk \'phpTemp\'-mellomlager for store eksporter (vil være noe tregere)';
$_['entry_settings_use_import_cache']       = 'Bruk \'phpTemp\'-mellomlager for store importer (vil være noe tregere)';

// Error
$_['error_permission']                      = 'Du har ikke rettigheter til å utføre valgte handling.';
$_['error_upload']                          = 'Opplastet regneark har valideringsfeil.';
$_['error_categories_header']               = 'Eksport/Import: Ugyldig hode i \'Categories\'-regnearket';
$_['error_products_header']                 = 'Eksport/Import: Ugyldig hode i \'Products\'-regnearket';
$_['error_additional_images_header']        = 'Eksport/Import: Ugyldig hode i \'AdditionalImages\'-regnearket';
$_['error_specials_header']                 = 'Eksport/Import: Ugyldig hode i \'Specials\'-regnearket';
$_['error_discounts_header']                = 'Eksport/Import: Ugyldig hode i \'Discounts\'-regnearket';
$_['error_rewards_header']                  = 'Eksport/Import: Ugyldig hode i \'Rewards\'-regnearket';
$_['error_product_options_header']          = 'Eksport/Import: Ugyldig hode i \'ProductOptions\'-regnearket';
$_['error_product_option_values_header']    = 'Eksport/Import: Ugyldig hode i \'ProductOptionValues\'-regnearket';
$_['error_options_header']                  = 'Eksport/Import: Ugyldig hode i \'Options\'-regnearket';
$_['error_option_values_header']            = 'Eksport/Import: Ugyldig hode i \'OptionValues\'-regnearket';
$_['error_attribute_groups_header']         = 'Eksport/Import: Ugyldig hode i \'AttributeGroups\'-regnearket';
$_['error_attributes_header']               = 'Eksport/Import: Ugyldig hode i \'Attributes\'-regnearket';
$_['error_product_options']                 = 'Eksport/Import: Mangler \'Products\'-regnearket, eller \'Products\'-regnearket er ikke listet før \'ProductOptions\'';
$_['error_product_option_values']           = 'Eksport/Import: Mangler \'Products\'-regnearket, eller \'Products\'-regnearket er ikke listet før \'ProductOptionValues\'';
$_['error_product_option_values_2']         = 'Eksport/Import: Mangler \'ProductOptions\'-regnearket, eller \'ProductOptions\'-regnearket er ikke listet før \'ProductOptionValues\'';
$_['error_product_option_values_3']         = 'Eksport/Import: \'ProductOptionValues\' regnearket er også forventet etter \'ProductOptions\'-regnearket';
$_['error_additional_images']               = 'Eksport/Import: Mangler \'Products\'-regnearket, eller \'Products\'-regnearket er ikke listet før \'AdditionalImages\'';
$_['error_specials']                        = 'Eksport/Import: Mangler \'Products\'-regnearket, eller \'Products\'-regnearket er ikke listet før \'Specials\'';
$_['error_discounts']                       = 'Eksport/Import: Mangler \'Products\'-regnearket, eller \'Products\'-regnearket er ikke listet før \'Discounts\'';
$_['error_rewards']                         = 'Eksport/Import: Mangler \'Products\'-regnearket, eller \'Products\'-regnearket er ikke listet før \'Rewards\'';
$_['error_product_attributes']              = 'Eksport/Import: Mangler \'Products\'-regnearket, eller \'Products\'-regnearket er ikke listet før \'ProductAttributes\'';
$_['error_attributes']                      = 'Eksport/Import: Mangler \'AttributeGroups\'-regnearket, eller \'AttributeGroups\'-regnearket er ikke listet før \'Attributes\'';
$_['error_attributes_2']                    = 'Eksport/Import: \'Attributes\'-regnearket er også ventet etter \'AttributeGroups\'-regnearket';
$_['error_option_values']                   = 'Eksport/Import: Mangler \'Options\'-regnearket, eller \'Options\'-regnearket er ikke listet før \'OptionValues\'';
$_['error_option_values_2']                 = 'Eksport/Import: \'OptionValues\'-regnearket er også ventet etter et \'Options\'-regneark';
$_['error_post_max_size']                   = 'Filstørrelse er høyere enn %1 (se PHP-innstillingen \'post_max_size\').';
$_['error_upload_max_filesize']             = 'Filstørrelse er høyere enn %1 (se PHP-innstillingen \'upload_max_filesize\').';
$_['error_select_file']                     = 'Du må velge en fil før du klikker på \'Import\'';
$_['error_id_no_data']                      = 'Ingen data mellom start-id og stopp-id.';
$_['error_page_no_data']                    = 'Ingen flere data.';
$_['error_param_not_number']                = 'Verdi for dataområde må være hele nummer.';
$_['error_upload_name']                     = 'Mangler filnavn for opplasting';
$_['error_upload_ext']                      = 'Opplastet fil har ikke av de aksepterte filendelsene (\'.xls\', \'.xlsx\' or \'.ods\'), og er kanskje ikke en regnearkfil.';
$_['error_no_news']                         = 'Ingen meldinger';
$_['error_batch_number']                    = 'Batchnummer må være høyere enn 0';
$_['error_min_item_id']                     = 'Start-id må være høyere enn 0';
$_['error_option_name']                     = 'Valg <b>%1</b> er definert flere ganger.<br />Du må aktivere følgende i innstillinger:<br />Bruk <em>option_id</em> i stede for <em>option name</em> i regnearkene \'ProductOptions\' og \'ProductOptionValues\'';
$_['error_option_value_name']               = 'Valgverdi \'%1\' er definert flere ganger innenfor sitt valg.<br />Du må aktivere følgende i innstillinger:<br />Bruk <em>option_value_id</em> i stede for <em>option_value name</em> i regnearket \'ProductOptionValues\'';
$_['error_attribute_group_name']            = 'Egenskapsgruppe \'%1\' er definert flere ganger.<br />Du må aktivere følgende i innstillinger:<br />Bruk <em>attribute_group_id</em> i stede for <em>attribute_group name</em> i regnearket \'ProductAttributes\'';
$_['error_attribute_name']                  = 'Egenskap \'%1\' er definert flere ganger innenfor sin egenskapsgruppe.<br />Du må aktivere følgende i innstillinger:<br />Bruk <em>attribute_id</em> i stede for <em>attribute name</em> i regnearket \'ProductAttributes\'';
$_['error_missing_customer_group']                      = 'Eksport/Import: Mangler \'customer_groups\' i regneark \'%1\'.';
$_['error_invalid_customer_group']                      = 'Eksport/Import: Udefinert \'customer_group\' \'%2\' brukt i regnearket \'%1\\;.';
$_['error_missing_product_id']                          = 'Eksport/Import: Mangler \'product_ids\' i regneark \'%1\'.';
$_['error_missing_option_id']                           = 'Eksport/Import: Mangler \'option_ids\' i regneark \'%1\'.';
$_['error_invalid_option_id']                           = 'Eksport/Import: Udefinert \'option_id\' \'%2\' brukt i regnearket \'%1\'.';
$_['error_missing_option_name']                         = 'Eksport/Import: Mangler \'option_names\' i regneark \'%1\'.';
$_['error_invalid_product_id_option_id']                = 'Eksport/Import: \'Option_id\' \'%3\' er ikke spesifisert for \'product_id\' \'%2\' i regneark \'%4\', men er brukt i regnearket \'%1\'.';
$_['error_missing_option_value_id']                     = 'Eksport/Import: Mangler \'option_value_ids\' i regneark \'%1\'.';
$_['error_invalid_option_id_option_value_id']           = 'Eksport/Import: Udefinert \'option_value_id\' \'%3\' for option_id \'%2\' brukt i regnearket \'%1\'.';
$_['error_missing_option_value_name']                   = 'Eksport/Import: Mangler \'option_value_names\' i regneark \'%1\'.';
$_['error_invalid_option_id_option_value_name']         = 'Eksport/Import: Udefinert \'option_value_name\' \'%3\' for optiion_id \'%2\' brukt i regnearket \'%1\'.'; 
$_['error_invalid_option_name']                         = 'Eksport/Import: Udefinert \'option_name\' \'%2\' brukt i regnearket \'%1\'.';
$_['error_invalid_product_id_option_name']              = 'Eksport/Import: \'Option_name\' \'%3\' er ikke spesifisert for \'product_id\' \'%2\' i regneark \'%4\', men er brukt i regnearket \'%1\'.';
$_['error_invalid_option_name_option_value_id']         = 'Eksport/Import: Udefinert \'option_value_id\' \'%3\' for option_name \'%2\' brukt i regnearket \'%1\'.';
$_['error_invalid_option_name_option_value_name']       = 'Eksport/Import: Udefinert \'option_value_name \'%3\' for option_name \'%2\' brukt i regnearket \'%1\'.';
$_['error_missing_attribute_group_id']                  = 'Eksport/Import: Mangler \'attribute_group_ids\' i regneark \'%1\'.';
$_['error_invalid_attribute_group_id']                  = 'Eksport/Import: Udefinert \'attribute_group_id\' \'%2\' brukt i regnearket \'%1\'.';
$_['error_missing_attribute_group_name']                = 'Eksport/Import: Mangler \'attribute_group_names\' i regneark \'%1\'.';
$_['error_missing_attribute_id']                        = 'Eksport/Import: Mangler \'attribute_ids\' i regneark \'%1\'.';
$_['error_invalid_attribute_group_id_attribute_id']     = 'Eksport/Import: Udefinert \'attribute_id\' \'%3\' for attribute_group_id \'%2\' brukt i regnearket \'%1\'.';
$_['error_missing_attribute_name']                      = 'Eksport/Import: Mangler \'attribute_names\' i regneark \'%1\'.';
$_['error_invalid_attribute_group_id_attribute_name']   = 'Eksport/Import: Udefinert \'attribute_name\' \'%3\' for optiion_id \'%2\' brukt i regnearket \'%1\'.'; 
$_['error_invalid_attribute_group_name']                = 'Eksport/Import: Udefinert \'attribute_group_name \'%2\' brukt i regnearket \'%1\'.';
$_['error_invalid_attribute_group_name_attribute_id']   = 'Eksport/Import: Udefinert \'attribute_id\' \'%3\' for attribute_group_name \'%2\' brukt i regnearket \'%1\'.';
$_['error_invalid_attribute_group_name_attribute_name'] = 'Eksport/Import: Udefinert \'attribute_name\' \'%3\' for attribute_group_name \'%2\' brukt i regnearket \'%1\'.';
$_['error_invalid_product_id']                          = 'Eksport/Import: Ugyldig \'product_id\' \'%2\' brukt i regnearket \'%1\'.';
$_['error_duplicate_product_id']                        = 'Eksport/Import: Duplikat \'product_id\' \'%2\' brukt i regnearket \'%1\'.';
$_['error_unlisted_product_id']                         = 'Export/Import: Regneark \'%1\' kan ikke bruke \'product_id\' \'%2\' ettersom det ikke er listet i regnearket \'Products\'.';

// Tabs
$_['tab_import']                            = 'Import';
$_['tab_export']                            = 'Eksport';
$_['tab_settings']                          = 'Innstillinger';

// Button labels
$_['button_import']                         = 'Import';
$_['button_export']                         = 'Eksport';
$_['button_settings']                       = 'Innstillinger for opplasting';
$_['button_export_id']                      = 'Etter id-område';
$_['button_export_page']                    = 'Etter batch';

// Help
$_['help_range_type']                       = '(Valgfritt, la stå tomt dersom det ikke behøves)';
$_['help_incremental_yes']                  = '(Oppdater og/eller legg til data)';
$_['help_incremental_no']                   = '(Slett alle gamle data før import)';
$_['help_import']                           = 'Regneark kan inneholde kategorier, produkter, egenskaper eller valg.';
$_['help_format']                           = 'Gjør en eksport først for å se regnearkets oppbygging.';