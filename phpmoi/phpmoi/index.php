<?php
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'admin':
        require_once 'Controller/AdminController.php';
        $controller = new AdminController();
        $controller->dashboard();
        break;
    case 'product':
        require_once 'Controller/ProductController.php';
        $controller = new ProductController();
        $controller->index();
        break;
    case 'product_detail':
        require_once 'Controller/ProductController.php';
        $id = $_GET['id'] ?? null;
        $controller = new ProductController();
        $controller->detail($id);
        break;
    default:
        require_once 'Controller/HomeController.php';
        $controller = new HomeController();
        $controller->home();
        break;
}

