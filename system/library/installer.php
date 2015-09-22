<?php
/**
 * @package		Interspire eCommerce
 * @copyright	Copyright (C) 2015 Interspire Co.,Ltd. All rights reserved. (Interspire.vn)
 * @credits		See CREDITS.txt for credits and other copyright notices.
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

class Installer extends Object {

    public function __construct($registry) {
        $this->cache = $registry->get('cache');
        $this->config = $registry->get('config');
        $this->filesystem = $registry->get('filesystem');
    }

    public function unzip($file) {
        $dir = dirname($file);

        $zip = new ZipArchive();

        if (!$zip->open($file)) {
            return false;
        }

        $zip->extractTo($dir);
        $zip->close();

        return true;
    }
}