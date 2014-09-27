<?php

class DB {
    private static $_instance = null;

    private $_pdo,
            $_query,
            $_error = false,
            $_results,
            $_count = 0;


    private function __construct() {
        echo "hit construct.";
        try {
            $this->_pdo = new PDO('mysql:host='.Config::get('mysql/host').';port=3306;dbname='.Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
            echo "after try.";
        } catch (PDOException $e) {
            die ($e->getMessage());
        }
    }

    public static function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new DB();
        }

        return self::$_instance;
    }

    public function query($sql, $params = array()) {

        echo "query run.";

        $this->_error = false;

        $i = 1;
        if ($this-> _query = $this->_pdo->prepare($sql)) {
            if (count($params)) {
                foreach ($params as $param) {
                    $this->_query->bindValue($i, $param);
                    $i++;
                }
            }

            if ($this->_query->execute()) {
                echo 'Succes';
            }
        }
    }

}