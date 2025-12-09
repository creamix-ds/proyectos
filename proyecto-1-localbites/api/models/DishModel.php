<?php
require_once __DIR__ . '/../../config/config.php';

class DishModel {
    private $db;

    public function __construct() {
        global $pdo;
        $this->db = $pdo;
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM dishes ORDER BY category, name");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM dishes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
