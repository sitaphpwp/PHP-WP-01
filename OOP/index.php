<?php
include_once './Admin/Car.php';

$car_obj = new Car("localhost", "root", "pass", '');
$car_obj->carRun();
$car_obj->carStop();
