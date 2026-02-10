<?php

class Vehicle {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function all() {
        return $this->db->query("SELECT * FROM vehicles WHERE available = 1")->fetchAll();
    }
}
