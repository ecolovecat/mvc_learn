<?php
require_once "Database.php";
class CRUD {
    private  $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function add() {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $name = $_POST['name'];
        $year = $_POST['year'];
        $address = $_POST['address'];
        $sql = "INSERT INTO info(name, address, year)
                Values (:name,:address,:year)";

        //query
        $this->db->query($sql);

        // bind value
        $this->db->bind(":name", $name);
        $this->db->bind(":year", $year);
        $this->db->bind(":address", $address);

        // result
        return $this->db->resultAll();
    }

    public function edit($id) {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $name = $_POST['name'];
        $year = $_POST['year'];
        $address = $_POST['address'];

        $sql = "update info set name=:name, address=:address, year=:year where id=:id";
        $this->db->query($sql);

        $this->db->bind(":name", $name);
        $this->db->bind(":year", $year);
        $this->db->bind(":address", $address);
        $this->db->bind(":id", $id);
        return $this->db->resultAll();
    }

    public function retrieve() {
        $sql = "Select * from info";
        $this->db->query($sql);

        return $this->db->resultAll();
    }

    public function retrieve_edit($id) {
        $sql =  "Select * from info where id = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);
        return $this->db->single();
    }
}