<?php
require_once 'config.php';

class ProductModel {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function getAllProducts() {
        $conn = $this->db->getConnection();
        $sql = "SELECT * FROM sanpham ORDER BY id DESC";
        $result = $conn->query($sql);
        
        $products = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }
        return $products;
    }
    
    public function getProductById($id) {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM sanpham WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    
    public function addProduct($name, $image, $giaTien, $tonKho) {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("INSERT INTO sanpham (name, image, giaTien, tonKho) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssdi", $name, $image, $giaTien, $tonKho);
        return $stmt->execute();
    }
    
    public function updateProduct($id, $name, $image, $giaTien, $tonKho) {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("UPDATE sanpham SET name = ?, image = ?, giaTien = ?, tonKho = ? WHERE id = ?");
        $stmt->bind_param("ssdii", $name, $image, $giaTien, $tonKho, $id);
        return $stmt->execute();
    }
    
    public function deleteProduct($id) {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("DELETE FROM sanpham WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
