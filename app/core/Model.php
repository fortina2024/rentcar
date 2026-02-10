<?php
require_once "../config/database.php"; // ta connexion existante

class Model {
    protected $db;

    public function __construct() {
        global $conn; // si ta connexion est dans $conn dans database.php
        $this->db = $conn;
    }
}
