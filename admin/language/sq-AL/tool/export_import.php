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
$_['text_list']                             = 'Eksporti dhe Importi';
$_['text_success']                          = 'Sukses: Ju keni importuar me sukses bazen e te dhenave!';
$_['text_success_settings']                 = 'Sukses: Ju keni importuar me sukses konfigurimet per mjetin Eksport / Import!';
$_['text_export_type_category']             = 'Kategoritë';
$_['text_export_type_product']              = 'Produktet (perfshire të dhënat e produktit, opsionet, specialet, zbritjet, shpërblimet dhe atributet)';
$_['text_export_type_option']               = 'Përkufizime e Opsionit';
$_['text_export_type_attribute']            = 'Përkufizime e Atributit';
$_['text_yes']                              = 'Po';
$_['text_no']                               = 'Jo';
$_['text_nochange']                         = 'Nuk ka të dhëna server të ndryshuar.';
$_['text_log_details']                      = 'Shih gjithashtu \'Sistem &gt; Gabim Shkrime\' për më shumë detaje.';
$_['text_loading_notifications']            = 'Duke marrë mesazhe';
$_['text_retry']                            = 'Provo Përsëri';

// Entry
$_['entry_import']                          = 'Import from a XLS, XLSX or ODS spreadsheet file';
$_['entry_export']                          = 'Export requested data to a XLSX spreadsheet file.';
$_['entry_export_type']                     = 'Përzgjidhni të dhënat që doni për eksportin:';
$_['entry_range_type']                      = 'Ju lutemi zgjidhni të dhënat varg që ju doni për eksportin:';
$_['entry_start_id']                        = 'ID e Fillimit:';
$_['entry_start_index']                     = 'Counts per batch:';
$_['entry_end_id']                          = 'ID e Fundit:';
$_['entry_end_index']                       = 'The batch number:';
$_['entry_incremental']                     = 'Përdorni Import Rritje';
$_['entry_upload']                          = 'Skedar për tu ngarkuar';
$_['entry_settings_use_option_id']          = 'Përdorni <em>option_id</em> në vend të <em>emrit opsion</em> në faqen e punës \'ProductOptions\' dhe \'ProductOptionValues\'';
$_['entry_settings_use_option_value_id']    = 'Përdorni <em>option_value_id</em> në vend të <em>option_value_name</em> në faqen e punës \'ProductOptionValues\'';
$_['entry_settings_use_attribute_group_id'] = 'Përdorni <em>attribute_group_id</em> në vend të <em>attribute_group_name</em> në faqen e punës \'ProductAttributes\'';
$_['entry_settings_use_attribute_id']       = 'Përdorni <em>attribute_id</em> në vend të <em>attribute_name</em> në faqen e punës \'ProductAttributes\'';
$_['entry_settings_use_export_cache']       = 'Use phpTemp cache for large Exports (will be slightly slower)';
$_['entry_settings_use_import_cache']       = 'Use phpTemp cache for large Imports (will be slightly slower)';

// Error
$_['error_permission']                      = 'Kujdes: Ju nuk jeni i autorizuar te modifikoni Eksport / Import!';
$_['error_upload']                          = 'Skedari tabelarë i ngarkuar së fundi ka gabime miratimi!';
$_['error_categories_header']               = 'Export/Import: Invalid header in the Categories worksheet';
$_['error_products_header']                 = 'Export/Import: Invalid header in the Products worksheet';
$_['error_additional_images_header']        = 'Export/Import: Invalid header in the AdditionalImages worksheet';
$_['error_specials_header']                 = 'Export/Import: Invalid header in the Specials worksheet';
$_['error_discounts_header']                = 'Export/Import: Invalid header in the Discounts worksheet';
$_['error_rewards_header']                  = 'Export/Import: Invalid header in the Rewards worksheet';
$_['error_product_options_header']          = 'Export/Import: Invalid header in the ProductOptions worksheet';
$_['error_product_option_values_header']    = 'Export/Import: Invalid header in the ProductOptionValues worksheet';
$_['error_options_header']                  = 'Export/Import: Invalid header in the Options worksheet';
$_['error_option_values_header']            = 'Export/Import: Invalid header in the OptionValues worksheet';
$_['error_attribute_groups_header']         = 'Export/Import: Invalid header in the AttributeGroups worksheet';
$_['error_attributes_header']               = 'Export/Import: Invalid header in the Attributes worksheet';
$_['error_product_options']                 = 'Eksport/Import: Faqe Pune e Produkteve e zhdukur ose Faqe Pune e Produkteve nuk është listuar para Opsionet e Produkteve';
$_['error_product_option_values']           = 'Eksport/Import: Faqe Pune e Produkteve e zhdukur ose Faqe Pune e Produkteve nuk është listuar para Vlerat e Opsioneve të Produkteve';
$_['error_product_option_values_2']         = 'Eksport/Import: Faqe Pune e Opsionet e Produkteve e zhdukur ose Faqe Pune e Opsionet e Produkteve nuk është listuar para Vlerat e Opsioneve të Produkteve';
$_['error_product_option_values_3']         = 'Eksport/Import: Faqe Pune e Vlerave Opsione të Produkteve gjithashtu pritet pas një Faqe Pune e Opsionet e Produkteve';
$_['error_additional_images']               = 'Eksport/Import: Faqe Pune e Produkteve e zhdukur ose Faqe Pune e Produkteve nuk është listuar para Imazheve Shtesë';
$_['error_specials']                        = 'Eksport/Import: Faqe Pune e Produkteve e zhdukur ose Faqe Pune e Produkteve nuk është listuar para Specialeve';
$_['error_discounts']                       = 'Eksport/Import: Faqe Pune e Produkteve e zhdukur ose Faqe Pune e Produkteve nuk është listuar para Zbritjeve';
$_['error_rewards']                         = 'Eksport/Import: Faqe Pune e Produkteve e zhdukur ose Faqe Pune e Produkteve nuk është listuar para Shpërblimeve';
$_['error_product_attributes']              = 'Eksport/Import: Faqe Pune e Produkteve e zhdukur ose Faqe Pune e Produkteve nuk është listuar para Atributet e Produkteve';
$_['error_attributes']                      = 'Eksport/Import: Faqe Pune e Grupeve të Atributeve e zhdukur ose Faqe Pune e Grupeve të Atributeve nuk është listuar para Atributeve';
$_['error_attributes_2']                    = 'Eksport/Import: Faqe Pune e Atributeve gjithashtu pritet pas një Faqe Pune e Grupeve të Atributeve';
$_['error_option_values']                   = 'Eksport/Import: Faqe Pune e Opsioneve e zhdukur ose Faqe Pune e Opsioneve nuk është listuar para Vlerave të Opsioneve';
$_['error_option_values_2']                 = 'Eksport/Import: Faqe Pune e Vlerave të Opsioneve gjithashtu pritet pas një Faqe Pune e Opsioneve';
$_['error_post_max_size']                   = 'Madhësia e skedarit është më e madhe se %1 (shih cilesimet PHP e \'post_max_size\')';
$_['error_upload_max_filesize']             = 'Madhësia e skedarit është më e madhe se %1 (shih cilesimet PHP e \'upload_max_filesize\')';
$_['error_select_file']                     = 'Ju lutem, përzgjidhni një skedar para se të klikoni \'Import\'';
$_['error_id_no_data']                      = 'No data between start-id and end-id.';
$_['error_page_no_data']                    = 'Nuk ka të dhëna më shumë.';
$_['error_param_not_number']                = 'Vlerat për vargun e të dhënave duhet të jenë të gjithë numrat.';
$_['error_upload_name']                     = 'Mungon emri i skedarit per ngarkim';
$_['error_upload_ext']                      = 'Skedari i ngarkuar nuk e ka një nga \'xls\', \'.xlsx\' ose \'.ods\' emër skedari shtesë, ai nuk mund të jetë një skedar tabelarë!';
$_['error_no_news']                         = 'Nuk ka mesazhe';
$_['error_batch_number']                    = 'Numri grumbull duhet të jetë më i madh se 0';
$_['error_min_item_id']                     = 'ID i fillimit duhet të jetë më i madh se 0';
$_['error_option_name']                     = 'Opsioni <b>\'%1\'</b> është përkufizuar disa herë të shumta!<br />Ju lutem aktivizoni Konfigurimet në vijim:<br />Përdorni <em>option_id</em> në vend të <em>option_name</em> në faqet e punës "Produkt Opsionet" dhe "Produkt Vlerat e Opsionit"';
$_['error_option_value_name']               = 'Vlera Opsionit \'%1\' është përkufizuar disa herë të shumta në kuadër të opsionit të tijë!<br />Në Konfigurimet-tab ju lutem aktivizoni në vijim:<br />Përdorni <em>option_value_id</em> në vend të <em>option_value_name</em> në faqen e punës "Produkt Vlerat e Opsionit"';
$_['error_attribute_group_name']            = 'Atribut Grupi \'%1\' është përkufizuar disa herë të shumta!<br />Në Konfigurimet-tab ju lutem aktivizoni në vijim:<br />Përdorni <em>attribute_group_id</em> në vend të <em>attribute_group_name</em> në faqen e punës "Produkt Atributet"';
$_['error_attribute_name']                  = 'Atribut \'%1\' është përkufizuar disa herë të shumta në kuadër të grupit të saj atribut!<br />Në Konfigurimet-tab ju lutem aktivizoni në vijim:<br />Përdorni <em>attribute_id</em> në vend të <em>attribute_name</em> në faqen e punës "Produkt Atributet"';
$_['error_missing_customer_group']                      = 'Eksport/Import: Mungon customer_groups ne faqen e punes \'%1\'!';
$_['error_invalid_customer_group']                      = 'Eksport/Import: customer_group i padefinuar \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_missing_product_id']                          = 'Eksport/Import: Mungon product_ids ne faqen e punes \'%1\'!';
$_['error_missing_option_id']                           = 'Eksport/Import: Mungon option_ids ne faqen e punes \'%1\'!';
$_['error_invalid_option_id']                           = 'Eksport/Import: option_id i padefinuar \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_missing_option_name']                         = 'Eksport/Import: Mungon option_names ne faqen e punes \'%1\'!';
$_['error_invalid_product_id_option_id']                = 'Eksport/Import: Option_id \'%3\' i paspecifikuar për product_id \'%2\' në faqen e punës \'%4\', por i përdorur në faqen e punës \'%1\'!';
$_['error_missing_option_value_id']                     = 'Eksport/Import: Mungon option_value_ids ne faqen e punes \'%1\'!';
$_['error_invalid_option_id_option_value_id']           = 'Eksport/Import: option_value_id i padefinuar \'%3\' për option_id \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_missing_option_value_name']                   = 'Eksport/Import: Mungon option_value_names ne faqen e punes \'%1\'!';
$_['error_invalid_option_id_option_value_name']         = 'Eksport/Import: option_value_name i padefinuar \'%3\' për option_id \'%2\' i përdorur në faqen e punës \'%1\'!'; 
$_['error_invalid_option_name']                         = 'Eksport/Import: option_name i padefinuar \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_invalid_product_id_option_name']              = 'Eksport/Import: Option_name \'%3\' i paspecifikuar për product_id \'%2\' në faqen e punës \'%4\', por i përdorur në faqen e punës \'%1\'!';
$_['error_invalid_option_name_option_value_id']         = 'Eksport/Import: option_value_id i padefinuar \'%3\' për option_name \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_invalid_option_name_option_value_name']       = 'Eksport/Import: option_value_name i padefinuar \'%3\' për option_name \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_missing_attribute_group_id']                  = 'Eksport/Import: Mungon attribute_group_ids ne faqen e punes \'%1\'!';
$_['error_invalid_attribute_group_id']                  = 'Eksport/Import: attribute_group_id i padefinuar \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_missing_attribute_group_name']                = 'Eksport/Import: Mungon attribute_group_names ne faqen e punes \'%1\'!';
$_['error_missing_attribute_id']                        = 'Eksport/Import: Mungon attribute_ids ne faqen e punes \'%1\'!';
$_['error_invalid_attribute_group_id_attribute_id']     = 'Eksport/Import: attribute_id i padefinuar \'%3\' për attribute_group_id \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_missing_attribute_name']                      = 'Eksport/Import: Mungon attribute_names ne faqen e punes \'%1\'!';
$_['error_invalid_attribute_group_id_attribute_name']   = 'Eksport/Import: attribute_name i padefinuar \'%3\' për option_id \'%2\' i përdorur në faqen e punës \'%1\'!'; 
$_['error_invalid_attribute_group_name']                = 'Eksport/Import: attribute_group_name i padefinuar \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_invalid_attribute_group_name_attribute_id']   = 'Eksport/Import: attribute_id i padefinuar \'%3\' për attribute_group_name \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_invalid_attribute_group_name_attribute_name'] = 'Eksport/Import: attribute_name i padefinuar \'%3\' për attribute_group_name \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_invalid_product_id']                          = 'Eksport/Import: product_id i pavlefshëm \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_duplicate_product_id']                        = 'Eksport/Import: Dublikatë e product_id \'%2\' i përdorur në faqen e punës \'%1\'!';
$_['error_unlisted_product_id']                         = 'Eksport/Import: Faqja e punës \'%1\' nuk mund të përdor product_id \'%2\' sepse ai nuk është listuar në faqen e punës \'Products\'!';

// Tabs
$_['tab_import']                            = 'Import';
$_['tab_export']                            = 'Eksport';
$_['tab_settings']                          = 'Konfigurimet';

// Button labels
$_['button_import']                         = 'Import';
$_['button_export']                         = 'Eksport';
$_['button_settings']                       = 'Perditeso Konfigurimet';
$_['button_export_id']                      = 'Sipas vargut ID';
$_['button_export_page']                    = 'Sipas Grupeve';

// Help
$_['help_range_type']                       = '(Opsionale, lëreni bosh nëse nuk është e nevojshme)';
$_['help_incremental_yes']                  = '(Përditësoni dhe / ose shtoni të dhëna)';
$_['help_incremental_no']                   = '(Fshij të gjitha të dhënat e vjetra para Import)';
$_['help_import']                           = 'Tabela Elektronike mund të ketë kategoritë, produktet, përkufizimet atribut apo përkufizimet opsion. ';
$_['help_format']                           = 'Bëj në fillim një Eksport për të parë formatin e saktë të faqen e punës!';