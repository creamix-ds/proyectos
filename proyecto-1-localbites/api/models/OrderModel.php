<?php
require_once __DIR__ . '/../../config/config.php';

class OrderModel {
    private $db;

    public function __construct() {
        global $pdo;
        $this->db = $pdo;
    }

    public function create($dishId, $customerName, $notes = '') {
        $stmt = $this->db->prepare(
            "INSERT INTO orders (dish_id, customer_name, notes) VALUES (?, ?, ?)"
        );
        $stmt->execute([$dishId, $customerName, $notes]);

        $id = $this->db->lastInsertId();
        $stmt = $this->db->prepare("SELECT * FROM orders WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
