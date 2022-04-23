<?php

class Database {
    private $host = "localhost:3307";
    private $dbname = "mvc_learn";
    private $name = "root";
    private $password = "040301";
    private $dsn;
    private $conn;
    private $sql;


    public function __construct() {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8';
        $this->conn = new PDO($dsn, $this->name, $this->password);

    }



    // prepare statement
    public function query($sql) {
        $this->sql = $this->conn->prepare($sql);
    }

    // bind value to execute
    public function bind($param, $value, $type=null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default: $type = PDO::PARAM_STR;
            }
        }
        $this->sql->bindValue($param, $value, $type);
    }

    // execute

    public function execute() {
        return $this->sql->execute();
    }

    // return multi record

    public function resultAll() {
        $this->execute();
        return $this->sql->fetchAll(PDO::FETCH_ASSOC);
    }

    // return single record

    public function single() {
        $this->execute();
        return $this->sql->fetch(PDO::FETCH_OBJ);
    }









}