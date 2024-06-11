<?php

namespace Core;

use PDO;
use PDOException;

class Database {

    private $pdo;
    private static $instance = null;

    public function __construct() {
        $config = require __DIR__.'../../config/database.php';

        try{
            $this->pdo = new PDO(
                'mysql:host='.$config['host'].';dbname='.$config['dbname'],
                $config['user'],
                $config['password']
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            die('Erreur de connexion à la base de données : '. $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->pdo;
    }
}