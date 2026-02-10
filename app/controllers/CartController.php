<?php

class CartController {

    public function add() {
        $cart = new Cart();
        $cart->add(
            $_SESSION['user']['id'],
            $_POST['vehicle_id'],
            $_POST['days']
        );
        header("Location: index.php?page=cart");
    }

    public function index() {
        $cart = new Cart();
        $items = $cart->getUserCart($_SESSION['user']['id']);
        require "../app/views/cart/index.php";
    }
}
