<?php
$page = $_GET['page'] ?? 'home';


switch ($page) {
    case 'login':
        require_once 'Controller/AuthController.php';
        $controller = new AuthController();
        $controller->login();
        break;
    case 'logout':
        require_once 'Controller/AuthController.php';
        $controller = new AuthController();
        $controller->logout();
        break;
    case 'admin':
        require_once 'Controller/AdminController.php';
        $controller = new AdminController();
        $controller->dashboard();
        break;
    case 'admin_add_product':
        require_once 'Controller/AdminController.php';
        $controller = new AdminController();
        $controller->addProduct();
        break;
    case 'admin_delete_product':
        require_once 'Controller/AdminController.php';
        $id = $_GET['id'] ?? null;
        $controller = new AdminController();
        $controller->deleteProduct($id);
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

