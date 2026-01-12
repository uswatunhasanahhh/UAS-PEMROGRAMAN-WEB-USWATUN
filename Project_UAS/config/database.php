<?php
class Database {
    public $conn;

    public function __construct() {
        $this->conn = new mysqli(
            "localhost",
            "root",
            "",
            "Project_UAS"
        );

        if ($this->conn->connect_error) {
            die("Database gagal: " . $this->conn->connect_error);
        }
    }
}
