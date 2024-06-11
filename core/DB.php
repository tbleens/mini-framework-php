<?php

namespace Core;

use PDO;

class DB {

    protected static $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public static function select($sql)
    {
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}