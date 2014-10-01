<?php

class User {
    private $_db,
            $_data;

    public function __construct($user = null) {
        $this ->_db = DB::getInstance();
    }

    public function create($fields = array()) {
        if ($this->_db->insert('users', $fields)) {
            throw new Exception('There was a problem creating an account.');
        }
    }

    public function find ($user = null) {
        if ($user) {
            $data = $this->_db->get('users', array('username', '=', $user));

            if ($data->count()) {
                $this->_data = $data->first();
                return true;
            }
        }
        return false;
    }

    public function login ($username = null, $password = null) {
        $user = $this->find($username);
        print_r($this->_data);
        return false;
    }
}