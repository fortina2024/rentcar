<?php
session_start();

require "../app/config/Database.php";
require "../app/models/User.php";
require "../app/models/Vehicle.php";
require "../app/models/Cart.php";
require "../app/controllers/AuthController.php";
require "../app/controllers/VehicleController.php";
require "../app/controllers/CartController.php";

$page = $_GET['page'] ?? 'vehicles';

switch ($page) {
    case 'login': (new AuthController)->login(); break;
    case 'register': (new AuthController)->register(); break;
    case 'logout': (new AuthController)->logout(); break;
    case 'vehicles': (new VehicleController)->index(); break;
    case 'cart-add': (new CartController)->add(); break;
    case 'cart': (new CartController)->index(); break;
}
