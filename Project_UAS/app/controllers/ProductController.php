<?php
require_once __DIR__ . '/../models/Product.php';

class ProductController {
    private $model;

    public function __construct() {
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/login");
            exit;
        }
        $this->model = new Product();
    }

    public function index() {
        $products = $this->model->getAll();
        require __DIR__ . '/../views/products/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->insert($_POST);
            header("Location: " . BASE_URL . "/products");
            exit;
        }

        require __DIR__ . '/../views/products/create.php';
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: " . BASE_URL . "/products");
        exit;
    }
}
