<?php
/**
 * @package		Interspire eCommerce
 * @copyright	Copyright (C) 2015 Interspire Co.,Ltd. All rights reserved. (Interspire.vn)
 * @credits		See CREDITS.txt for credits and other copyright notices.
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

class ModelExtensionInstaller extends Model {

	public function languageExist($dir) {
		$query = $this->db->query("SELECT language_id FROM " . DB_PREFIX . "language WHERE `directory` = '" . $this->db->escape($dir) . "'");

		if ($query->num_rows) {
			return $query->row['language_id'];
		} else {
			return false;
		}
	}
}
