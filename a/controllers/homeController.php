<?php
require_once 'models/ProductModel.php';

class HomeController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function home() {
        $products = $this->productModel->getAllProducts();
        include 'views/home.php';
    }

}
?> 