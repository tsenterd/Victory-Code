<?php

class DB {
    private static $_instance = null;

    private $_pdo,
            $_query,
            $_error = false,
            $_results,
            $_count = 0;


    private function _construct() {
        try {
            $this->_pdo = new PDO('mysql:host='.Config::get('mysql/host').';port=3306;dbname='.Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
            echo 'Connected!';
        } catch (PDOException $e) {
            echo ('failed.');
            die ($e->getMessage());
        }
    }

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new DB();
        }

        return self::$_instance;
    }

}