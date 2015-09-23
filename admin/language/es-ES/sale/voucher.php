<?php
/**
 * @package		Arastta eCommerce
 * @copyright	Copyright (C) 2015 Arastta Association. All rights reserved. (arastta.org)
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

// Heading
$_['heading_title']     = 'Certificado de Regalo';

// Text
$_['text_success']      = 'Correcto: Ha modificado Certificado de Regalo!';
$_['text_list']         = 'Lista de Bono regalo';
$_['text_add']          = 'Añadir Bono regalo';
$_['text_edit']         = 'Editar Bono regalo';
$_['text_sent']         = 'Correcto: E-mail de Certificado de Regalo ha sido enviado!';

// Column
$_['column_name']       = 'Nombre Certificado';
$_['column_code']       = 'Código';
$_['column_from']       = 'De';
$_['column_to']         = 'Para';
$_['column_theme']      = 'Tema';
$_['column_amount']     = 'Monto';
$_['column_status']     = 'Estado';
$_['column_order_id']   = 'Id Orden';
$_['column_customer']   = 'Cliente';
$_['column_date_added'] = 'Fecha Adicionado';
$_['column_action']     = 'Acción';

// Entry
$_['entry_code']        = 'Código:<br /><span class="help">El Código que el cliente introduce para activar el Certificado de Regalo.</span>';
$_['entry_from_name']   = 'Nombre Remitente:';
$_['entry_from_email']  = 'E-Mail Remitente:';
$_['entry_to_name']     = 'Nombre Destinatario:';
$_['entry_to_email']    = 'E-Mail Destinatario:';
$_['entry_theme']       = 'Tema:';
$_['entry_message']     = 'Mensaje:';
$_['entry_amount']      = 'Monto:';
$_['entry_status']      = 'Estado:';

// Help
$_['help_code']         = 'Ingresa el código del cliente para activar el bono.';

// Error
$_['error_selection']   = 'ADVERTENCIA: No hay bonos seleccionados!';
$_['error_permission']  = 'Advertencia: No tiene permiso para modificar Certificado de Regalo!';
$_['error_exists']      = 'Advertencia: Código del Certificado ya está en Uso!';
$_['error_code']        = 'Código debe estar entre 3 y 10 caracteres!';
$_['error_to_name']     = 'Nombre Destinatario estar entre 1 y 64 caracteres!';
$_['error_from_name']   = 'Su Nombre debe estar entre 1 y 64 caracteres!';
$_['error_email']       = 'E-Mail no válido!';
$_['error_amount']      = 'Monto debe ser mayor o igual a 1!';
$_['error_order']       = 'Advertencia: Este Certificado no puede ser Borrado porque es parte de una <a href="%s">orden</a>!';