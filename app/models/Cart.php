<?php

class Cart {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function add($userId, $vehicleId, $days) {
        $sql = "INSERT INTO carts (user_id, vehicle_id, days) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$userId, $vehicleId, $days]);
    }

    public function getUserCart($userId) {
        $sql = "SELECT v.name, v.price_per_day, c.days,
                (v.price_per_day * c.days) AS total
                FROM carts c
                JOIN vehicles v ON v.id = c.vehicle_id
                WHERE c.user_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }
}
