<?php

class VehicleController {

    public function index() {
        $vehicle = new Vehicle();
        $vehicles = $vehicle->all();
        require "../app/views/vehicles/index.php";
    }
}
