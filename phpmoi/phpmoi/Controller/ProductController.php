<?php
class ProductController {
    public function index() {
        include_once "Views/header.php";
        require_once "Model/ProductModel.php";
        $productModel = new Product();
        $products = $productModel->getAll();
        require_once "views/product.php";
        include_once "Views/footer.php";
    }

    public function detail($id) {
        if ($id) {
            require_once "Model/ProductModel.php";
            $productModel = new Product();
            $product = $productModel->getDetail($id);
            include_once "Views/header.php";
            require_once "Views/product_detail.php";
            include_once "Views/footer.php";
        } else {
            header("Location: index.php?page=product");
        }
    }
}