<?php
require_once '../config/database.php';

class User extends Database {
    public function login($data) {
        $email = $data['email'];
        $pass = md5($data['password']);
        $q = $this->conn->query("SELECT * FROM users WHERE email='$email' AND password='$pass'");
        return $q->fetch_assoc();
    }

    public function register($data) {
        $this->conn->query("INSERT INTO users VALUES(NULL,'$data[name]','$data[email]',md5('$data[password]'),'user')");
    }
}
