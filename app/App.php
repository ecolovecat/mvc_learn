<?php

require_once __DIR__."/../model/Database.php";

class App {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
}