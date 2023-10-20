<?php

    require_once dirname(__DIR__) . '/include/bootstrap.php';

    if(!isset($_POST['car']) || empty($_POST['car'])) {
        die("Niste uneli ime automobila");
    }

    if(!isset($_POST['model']) || empty($_POST['model'])) {
        die("Niste uneli model automobila");
    }

    if(!isset($_POST['price']) || empty($_POST['price'])) {
        die("Niste uneli cenu automobila");
    }

    if(!isset($_POST['age']) || empty($_POST['age'])) {
        die("Niste uneli godiste automobila");
    }

    if(!isset($_POST['quantity']) || empty($_POST['quantity'])) {
        die("Niste uneli kolicinu automobila");
    }

    $car = $_POST['car'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $age = $_POST['age'];
    $quantity = $_POST['quantity'];

    $result = $db->query("INSERT INTO cars (car, model, price, age, quantity) VALUES ('$car', '$model', $price, $age, $quantity)");



