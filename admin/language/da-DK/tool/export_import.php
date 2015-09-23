<?php
/**
 * @package		Arastta eCommerce
 * @copyright	Copyright (C) 2015 Arastta Association. All rights reserved. (arastta.org)
 * @credits		See CREDITS.txt for credits and other copyright notices.
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

// Heading
$_['heading_title']                         = 'Eksport / Import';

// Text
$_['text_list']                             = 'Export and Import';
$_['text_success']                          = 'Succes: Du har succesfuldt importeret dine data!';
$_['text_success_settings']                 = 'Succes: Du har opdateret indstillingerne for Eksport/Import værktøjet!';
$_['text_export_type_category']             = 'Kategorier';
$_['text_export_type_product']              = 'Produkter (inkluderer produktdata, valgmuligheder, tilbud, rabatter, belønninger og atributter)';
$_['text_export_type_option']               = 'Valgmulighedsdefinitioner';
$_['text_export_type_attribute']            = 'Atributdefinitioner';
$_['text_yes']                              = 'Ja';
$_['text_no']                               = 'Nej';
$_['text_nochange']                         = 'Ingen data på serveren er ændret.';
$_['text_log_details']                      = 'Se også \'System &gt; Fejllog\' for yderligere detaljer.';
$_['text_loading_notifications']            = 'Henter beskeder';
$_['text_retry']                            = 'Prøv igen';

// Entry
$_['entry_import']                          = 'Importer fra en XLS, SLXS eller ODS spreadsheet fil';
$_['entry_export']                          = 'Eksporter valgte data til en XLSX spreadsheet fil.';
$_['entry_export_type']                     = 'Vælg de data du vil eksportere:';
$_['entry_range_type']                      = 'Vælg datamængden du vil eksportere:';
$_['entry_start_id']                        = 'Start id:';
$_['entry_start_index']                     = 'Antal pr kørsel:';
$_['entry_end_id']                          = 'Slut id:';
$_['entry_end_index']                       = 'Kørselnummer:';
$_['entry_incremental']                     = 'Brug trinvis import';
$_['entry_upload']                          = 'Fil der skal oploades';
$_['entry_settings_use_option_id']          = 'Brug <em>option_id</em> i stedet for <em>option name</em> i worksheets \'ProductOptions\' og \'ProductOptionValues\'';
$_['entry_settings_use_option_value_id']    = 'Brug <em>option_value_id</em> i stedet for <em>option_value name</em> i worksheet \'ProductOptionValues\'';
$_['entry_settings_use_attribute_group_id'] = 'Brug <em>attribute_group_id</em> i stedet for <em>attribute_group name</em> i worksheets \'ProductAttributes\'';
$_['entry_settings_use_attribute_id']       = 'Brug <em>attribute_id</em> i stedet for <em>attribute name</em> i worksheet \'ProductAttributes\'';
$_['entry_settings_use_export_cache']       = 'Brug phpTemp cache til større eksporteringer (vil være en del langsommere)';
$_['entry_settings_use_import_cache']       = 'Brug phpTemp cache til store importeringer (vil være en del langsommer)';

// Error
$_['error_permission']                      = 'Advarsel: Du har ikke rettigheder til at ændre Eksport/Import!';
$_['error_upload']                          = 'Den indlæste spreadsheet fil er ikke gyldig!';
$_['error_categories_header']               = 'Eksport/Import: Ugyldig header i Categories worksheet';
$_['error_products_header']                 = 'Eksport/Import: Ugyldig header i Products worksheet';
$_['error_additional_images_header']        = 'Eksport/Import: Ugyldig header i AdditionalImages worksheet';
$_['error_specials_header']                 = 'Eksport/Import: Ugyldig header i Specials worksheet';
$_['error_discounts_header']                = 'Eksport/Import: Ugyldig header i Discounts worksheet';
$_['error_rewards_header']                  = 'Eksport/Import: Ugyldig header i Rewards worksheet';
$_['error_product_options_header']          = 'Eksport/Import: Ugyldig header i ProductOptions worksheet';
$_['error_product_option_values_header']    = 'Eksport/Import: Ugyldig header i ProductOptionValues worksheet';
$_['error_options_header']                  = 'Eksport/Import: Ugyldig header i Options worksheet';
$_['error_option_values_header']            = 'Eksport/Import: Ugyldig header i OptionValues worksheet';
$_['error_attribute_groups_header']         = 'Eksport/Import: Ugyldig header i AttributeGroups worksheet';
$_['error_attributes_header']               = 'Eksport/Import: Ugyldig header i Attributes worksheet';
$_['error_product_options']                 = 'Eksport/Import: Manglende Products worksheet eller Products worksheet er ikke listet før ProductOptions';
$_['error_product_option_values']           = 'Eksport/Import: Manglende Products worksheet eller Products worksheet er ikke listet før ProductOptionsValues';
$_['error_product_option_values_2']         = 'Eksport/Import: Manglende ProductOptions worksheet eller ProductOptions worksheet er ikke listet før ProductOptionValues';
$_['error_product_option_values_3']         = 'Eksport/Import: ProductOptionValues worksheet også forventet efter ProductOptions worksheet';
$_['error_additional_images']               = 'Eksport/Import: Manglende Products worksheet eller Products worksheet ikke listet før AdditionalImages';
$_['error_specials']                        = 'Eksport/Import: Manglende Products worksheet eller Products worksheet ikke listet før Specials';
$_['error_discounts']                       = 'Eksport/Import: Manglende Products worksheet eller Products worksheet ikke listet før Discounts';
$_['error_rewards']                         = 'Eksport/Import: Manglende Products worksheet eller Products worksheet ikke listet før Rewards';
$_['error_product_attributes']              = 'Eksport/Import: Manglende Products worksheet eller Products worksheet er ikke listet før ProductAttributes';
$_['error_attributes']                      = 'Eksport/Import: Manglende AttributeGroups worksheet eller AttributeGroups worksheet ikke listet før Attributes';
$_['error_attributes_2']                    = 'Eksport/Import: Attributes worksheet også forventet efter et AttributeGroups worksheet';
$_['error_option_values']                   = 'Eksport/Import: Manglende Options worksheet eller Options worksheet ikke listet før OptionValues';
$_['error_option_values_2']                 = 'Eksport/Import: OptionValues worksheet også forventet efter en Options worksheet';
$_['error_post_max_size']                   = 'Filstørrelse større end %1 (se PHP instillinger \'post_max_size\')';
$_['error_upload_max_filesize']             = 'Filstørrelse er større end %1 (se PHP indstilling \'upload_max_filesize\')';
$_['error_select_file']                     = 'Vælg venligst en fil inden der klikkes \'Importer\'';
$_['error_id_no_data']                      = 'Ingen data mellem start-id og slut-id.';
$_['error_page_no_data']                    = 'Ikke mere data.';
$_['error_param_not_number']                = 'Værdier for datarække skal være hele tal.';
$_['error_upload_name']                     = 'Manglende filnavn til opload';
$_['error_upload_ext']                      = 'Oploadede fil har ikke en af \'.xls\', \'.xlsx\' eller \'.ods\' endelser. Det er muligvis ikke en spreadsheet fil!';
$_['error_no_news']                         = 'Ingen beskeder';
$_['error_batch_number']                    = 'Kørselsnummer skal være større end 0';
$_['error_min_item_id']                     = 'Start id skal være større end 0';
$_['error_option_name']                     = 'Option <b>%1</b> er defineret flere gange!<br />Aktiver venligst følgende i indstillingerne:<br />Brug <em>option_id</em> i stedet for <em>option name</em> i worksheets "ProductOptions" and "ProductOptionValues"';
$_['error_option_value_name']               = 'Option værdi \'%1\' er defineret flere steder i dens option!<br />Under indstillinger aktiver venligst følgende:<br />Brug <em>option_value_id</em> i stedet for <em>option_value name</em> i worksheet "ProductOptionValues"';
$_['error_attribute_group_name']            = 'AttributeGroup \'%1\' er defineret flere gange!<br />Aktiver venligst følgende i indstillinger:<br />Brug <em>attribute_group_id</em> i stedet for <em>attribute_group name</em> i worksheets "ProductAttributes"';
$_['error_attribute_name']                  = 'Attribute \'%1\' er defineret flere gange i dens gruppe!<br />Aktiver venlist følgende i indstillinger:<br />Brug <em>attribute_id</em> i stedet for <em>attribute name</em> i worksheet "ProductAttributes"';
$_['error_missing_customer_group']                      = 'Eksport/Import: Manglende customer_groups i worksheet \'%1\'!';
$_['error_invalid_customer_group']                      = 'Eksport/Import: Udefineret customer_group \'%2\' brugt i worksheet \'%1\\;!';
$_['error_missing_product_id']                          = 'Eksport/Import: Manglende product_ids i worksheet \'%1\'!';
$_['error_missing_option_id']                           = 'Eksport/Import: Manglende option_ids i worksheet \'%1\'!';
$_['error_invalid_option_id']                           = 'Eksport/Import: Udefinret option_id \'%2\' brugt i worksheet \'%1\'!';
$_['error_missing_option_name']                         = 'Eksport/Import: Manglende option_names i worksheet \'%1\'!';
$_['error_invalid_product_id_option_id']                = 'Eksport/Import: Option_id \'%3\' ikke specificeret for product_id \'%2\' i worksheet \'%4\', men er brugt i worksheet \'%1\'!';
$_['error_missing_option_value_id']                     = 'Eksport/Import: Manglende option_value_ids i worksheet \'%1\'!';
$_['error_invalid_option_id_option_value_id']           = 'Eksport/Import: Udefineret option_value_id \'%3\' for option_id \'%2\' brugt i worksheet \'%1\'!';
$_['error_missing_option_value_name']                   = 'Eksport/Import: Manglende option_value_names i worksheet \'%1\'!';
$_['error_invalid_option_id_option_value_name']         = 'Eksport/Import: Udefineret option_value_name \'%3\' for option_id \'%2\' brugt i worksheet \'%1\'!'; 
$_['error_invalid_option_name']                         = 'Eksport/Import: Udefineret option_name \'%2\' brugt i worksheet \'%1\'!';
$_['error_invalid_product_id_option_name']              = 'Eksport/Import: Option_name \'%3\' ikke specificeret for product_id \'%2\' i worksheet \'%4\', men er brugt i worksheet \'%1\'!';
$_['error_invalid_option_name_option_value_id']         = 'Eksport/Import: Udefineret option_value_id \'%3\' for option_name \'%2\' brugt i worksheet \'%1\'!';
$_['error_invalid_option_name_option_value_name']       = 'Eksport/Import: Udefineret option_value_name \'%3\' for option_name \'%2\' brugt i worksheet \'%1\'!';
$_['error_missing_attribute_group_id']                  = 'Eksport/Import: Manglende attribute_group_ids i worksheet \'%1\'!';
$_['error_invalid_attribute_group_id']                  = 'Eksport/Import: Udefineret attribute_group_id \'%2\' brugt i worksheet \'%1\'!';
$_['error_missing_attribute_group_name']                = 'Eksport/Import: Manglende attribute_group_names i worksheet \'%1\'!';
$_['error_missing_attribute_id']                        = 'Eksport/Import: Manglende attribute_ids i worksheet \'%1\'!';
$_['error_invalid_attribute_group_id_attribute_id']     = 'Eksport/Import: Udefineret attribute_id \'%3\' for attribute_group_id \'%2\' brugt i worksheet \'%1\'!';
$_['error_missing_attribute_name']                      = 'Eksport/Import: Manglende attribute_names i worksheet \'%1\'!';
$_['error_invalid_attribute_group_id_attribute_name']   = 'Eksport/Import: Udefineret attribute_name \'%3\' for optiion_id \'%2\' brugt i worksheet \'%1\'!'; 
$_['error_invalid_attribute_group_name']                = 'Eksport/Import: Udefineret attribute_group_name \'%2\' brugt i worksheet \'%1\'!';
$_['error_invalid_attribute_group_name_attribute_id']   = 'Eksport/Import: Udefineret attribute_id \'%3\' for attribute_group_name \'%2\' brugt i worksheet \'%1\'!';
$_['error_invalid_attribute_group_name_attribute_name'] = 'Eksport/Import: Udefineret attribute_name \'%3\' for attribute_group_name \'%2\' brugt i worksheet \'%1\'!';
$_['error_invalid_product_id']                          = 'Eksport/Import: Ugyldig product_id \'%2\' brugt i worksheet \'%1\'!';
$_['error_duplicate_product_id']                        = 'Eksport/Import: Duplikeret product_id \'%2\' brugt i worksheet \'%1\'!';
$_['error_unlisted_product_id']                         = 'Eksport/Import: Worksheet \'%1\' kan ikke bruge product_id \'%2\' , da det ikke er listet i worksheet \'Products\'!';

// Tabs
$_['tab_import']                            = 'Import';
$_['tab_export']                            = 'Eksport';
$_['tab_settings']                          = 'Indstillinger';

// Button labels
$_['button_import']                         = 'Import';
$_['button_export']                         = 'Eksport';
$_['button_settings']                       = 'Opdater indstillinger';
$_['button_export_id']                      = 'Efter id række';
$_['button_export_page']                    = 'Efter kørsel';

// Help
$_['help_range_type']                       = '(Valgfrit, efterlad blank hvis ikke nødvendig)';
$_['help_incremental_yes']                  = '(Opdater og/eller tilføj data)';
$_['help_incremental_no']                   = '(Slet alt gammel data inden import)';
$_['help_import']                           = 'Spreadsheet kan have kategorier, produkter, atribut definitioner eller valgmulighedsdefinitioner. ';
$_['help_format']                           = 'Kør en eksport først for at se den nøjagtige formatering af worksheets!';