<?php
class Controller {
    // Méthode pour afficher une vue avec des données
    public function view($path, $data = []) {
        extract($data); // transforme $data en variables
        require "../app/views/$path.php";
    }
}
