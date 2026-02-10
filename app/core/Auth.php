<?php
require_once "../config/database.php"; // connexion existante

class Auth {
    protected $db;

    public function __construct() {
        global $conn; // ta connexion
        $this->db = $conn;
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }

    // Inscription
    public function register($name, $email, $password) {
        // Vérifier si email existe déjà
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if($stmt->rowCount() > 0){
            return "Email déjà utilisé.";
        }

        // Hasher le mot de passe
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Insérer dans la base
        $stmt = $this->db->prepare("INSERT INTO users (name,email,password) VALUES (?,?,?)");
        $stmt->execute([$name, $email, $hash]);
        return true;
    }

    // Connexion
    public function login($email, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password, $user['password'])){
            $_SESSION['user'] = [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email']
            ];
            return true;
        }
        return "Email ou mot de passe incorrect.";
    }

    // Déconnexion
    public function logout() {
        session_destroy();
    }

    // Vérifier si connecté
    public function check() {
        return isset($_SESSION['user']);
    }

    // Retourne l'utilisateur connecté
    public function user() {
        return $_SESSION['user'] ?? null;
    }
}
