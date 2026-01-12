<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASE_URL', '/Project_UAS/public');

require_once __DIR__ . '/../config/database.php';

$url = $_GET['url'] ?? 'login';
$url = explode('/', $url);

switch ($url[0]) {
    case 'login':
        require_once __DIR__ . '/../app/controllers/AuthController.php';
        (new AuthController)->login();
        break;

    case 'register':
        require_once __DIR__ . '/../app/controllers/AuthController.php';
        (new AuthController)->register();
        break;

    case 'logout':
        session_destroy();
        header("Location: " . BASE_URL . "/login");
        exit;

    case 'products':
        require_once __DIR__ . '/../app/controllers/ProductController.php';
        (new ProductController)->index();
        break;

    case 'create':
        require_once __DIR__ . '/../app/controllers/ProductController.php';
        (new ProductController)->create();
        break;

    case 'delete':
        require_once __DIR__ . '/../app/controllers/ProductController.php';
        (new ProductController)->delete($url[1] ?? null);
        break;

    default:
        echo "404";
}
