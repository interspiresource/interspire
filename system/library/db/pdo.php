<?php
/**
 * @package		Interspire eCommerce
 * @copyright	Copyright (C) 2015 Interspire Co.,Ltd. All rights reserved. (Interspire.vn)
 * @credits		See CREDITS.txt for credits and other copyright notices.
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

namespace DB;

final class PDO {

	private $pdo = null;
	private $statement = null;

	public function __construct($hostname, $username, $password, $database, $port = "3306") {
		try {
			$this->pdo = new \PDO("mysql:host=" . $hostname . ";port=" . $port . ";dbname=" . $database, $username, $password, array(\PDO::ATTR_PERSISTENT => true));
		} catch(\PDOException $e) {
			trigger_error('Error: Could not make a database link ( ' . $e->getMessage() . '). Error Code : ' . $e->getCode() . ' <br />');
            exit();
		}

		$this->pdo->exec("SET NAMES 'utf8'");
		$this->pdo->exec("SET CHARACTER SET utf8");
		$this->pdo->exec("SET CHARACTER_SET_CONNECTION=utf8");
		$this->pdo->exec("SET SQL_MODE = ''");

	}

	public function prepare($sql) {
		$this->statement = $this->pdo->prepare($sql);
	}

	public function bindParam($parameter, $variable, $data_type = \PDO::PARAM_STR, $length = 0) {
		if ($length) {
			$this->statement->bindParam($parameter, $variable, $data_type, $length);
		} else {
			$this->statement->bindParam($parameter, $variable, $data_type);
		}
	}

	public function execute() {
		try {
			if ($this->statement && $this->statement->execute()) {
				$data = array();

				while ($row = $this->statement->fetch(\PDO::FETCH_ASSOC)) {
					$data[] = $row;
				}

				$result = new \stdClass();
				$result->row = (isset($data[0])) ? $data[0] : array();
				$result->rows = $data;
				$result->num_rows = $this->statement->rowCount();
			}
		} catch(\PDOException $e) {
			trigger_error('Error: ' . $e->getMessage() . ' Error Code : ' . $e->getCode());
		}
	}

	public function query($sql, $params = array()) {
		$this->statement = $this->pdo->prepare($sql);
		$result = false;

		try {
			if ($this->statement && $this->statement->execute($params)) {
				$data = array();

				while ($row = $this->statement->fetch(\PDO::FETCH_ASSOC)) {
					$data[] = $row;
				}

				$result = new \stdClass();
				$result->row = (isset($data[0]) ? $data[0] : array());
				$result->rows = $data;
				$result->num_rows = $this->statement->rowCount();
			}
		} catch (\PDOException $e) {
			trigger_error('Error: ' . $e->getMessage() . ' Error Code : ' . $e->getCode() . ' <br />' . $sql);
			exit();
		}

		if ($result) {
			return $result;
		} else {
			$result = new \stdClass();
			$result->row = array();
			$result->rows = array();
			$result->num_rows = 0;
			return $result;
		}
	}

	public function escape($value) {
		$search = array("\\", "\0", "\n", "\r", "\x1a", "'", '"');
		$replace = array("\\\\", "\\0", "\\n", "\\r", "\Z", "\'", '\"');
		return str_replace($search, $replace, $value);
	}

	public function countAffected() {
		if ($this->statement) {
			return $this->statement->rowCount();
		} else {
			return 0;
		}
	}

	public function getLastId() {
		return $this->pdo->lastInsertId();
	}

    public function getVersion() {
        return $this->pdo->getAttribute(constant("PDO::ATTR_SERVER_VERSION"));
    }

    public function getCollation() {
        // Get the database collation from server
        $result = $this->query('SHOW VARIABLES LIKE "collation_database"');

        if (!empty($result->row) && isset($result->row['Value'])) {
            return $result->row['Value'];
        } else {
            return '';
        }
    }

	public function __destruct() {
		$this->pdo = null;
	}
}