<?php
require_once __DIR__ . '/../../config/database.php';

class Product extends Database {

    public function getAll() {
        return $this->conn
            ->query("SELECT * FROM products ORDER BY id DESC")
            ->fetch_all(MYSQLI_ASSOC);
    }

    public function insert($data) {
        $name  = $this->conn->real_escape_string($data['name']);
        $price = (int)$data['price'];

        $this->conn->query(
            "INSERT INTO products (name, price) VALUES ('$name', $price)"
        );
    }

    public function delete($id) {
        $this->conn->query("DELETE FROM products WHERE id=$id");
    }
}
