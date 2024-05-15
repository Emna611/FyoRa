<?php
class Product {
    private $conn;
    private $table_name = "products";

    public $id;
    public $name;
    public $price;
    public $category;
    public $description;
    public $image;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT id, name, price, category, description, image FROM products";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    
        return $stmt;
    }
}
?>