<?php
/**
 * @package		Arastta eCommerce
 * @copyright	Copyright (C) 2015 Arastta Association. All rights reserved. (arastta.org)
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

// Heading
$_['heading_title']     = 'Lahjakortit';

// Text
$_['text_success']      = 'Success: You have modified vouchers!';
$_['text_list']         = 'Lahjakortit';
$_['text_add']          = 'Lisää lahjakortti';
$_['text_edit']         = 'Muokkaa lahjakorttia';
$_['text_sent']         = 'Success: Gift Voucher e-mail has been sent!';

// Column
$_['column_name']       = 'Lahjakortin nimi';
$_['column_code']       = 'Koodi';
$_['column_from']       = 'Lähettäjä';
$_['column_to']         = 'Vastaanottaja';
$_['column_theme']      = 'Teema';
$_['column_amount']     = 'Summa';
$_['column_status']     = 'Tila';
$_['column_order_id']   = 'Tilausnumero';
$_['column_customer']   = 'Asiakas';
$_['column_date_added'] = 'Lisäyspäivämäärä';
$_['column_action']     = 'Toiminto';

// Entry
$_['entry_code']        = 'Koodi';
$_['entry_from_name']   = 'Lähettäjän nimi';
$_['entry_from_email']  = 'From E-Mail';
$_['entry_to_name']     = 'Saajan nimi';
$_['entry_to_email']    = 'Saajan sähköposti';
$_['entry_theme']       = 'Teema';
$_['entry_message']     = 'Vesti';
$_['entry_amount']      = 'Summa';
$_['entry_status']      = 'Tila';

// Help
$_['help_code']         = 'The code the customer enters to activate the voucher.';

// Error
$_['error_selection']   = 'Warning: No vouchers selected!';
$_['error_permission']  = 'Warning: You do not have permission to modify vouchers!';
$_['error_exists']      = 'Warning: Voucher code is already in use!';
$_['error_code']        = 'Koodin tulee olla välillä 3 ja 10 merkkiä!';
$_['error_to_name']     = 'Recipient\'s Name must be between 1 and 64 characters!';
$_['error_from_name']   = 'Your Name must be between 1 and 64 characters!';
$_['error_email']       = 'Sähköpostiosoite ei ole toimiva!';
$_['error_amount']      = 'Amount must be greater than or equal to 1!';
$_['error_order']       = 'Warning: This voucher cannot be deleted as it is part of an <a href="%s">order</a>!';