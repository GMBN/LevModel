<?php

namespace LevModel\Service;

class Db {

    private $conn = false;

    function connect() {
        if($this->conn){
            return $this->conn;            
        }

        $opt = \sm::getInstance()->get('config');
        $config = $opt['app']['connect'];

        $options = isset($config['options']) ? $config['options'] : [];
        $db = new \PDO(
                'mysql:host=' . $config['host'] . ':3306;dbname=' . $config['db'], $config['user'], $config['pass'], $options
        );
        $this->conn = $db;
        return $db;
    }

}
