<?php
/**
 * @package		Interspire eCommerce
 * @copyright	Copyright (C) 2015 Interspire Co.,Ltd. All rights reserved. (Interspire.vn)
 * @credits		See CREDITS.txt for credits and other copyright notices.
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

class EventAccountDemo extends Event {

    public function preCustomerAddAddress($data) {
        $xyz = $data;
    }
}