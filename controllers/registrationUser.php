<?php
    require_once dirname(__DIR__) . '/include/bootstrap.php';

    if(!isset($_POST['name']) || empty($_POST['name'])) {
        die("Niste uneli ime");
    }

    if(!isset($_POST['email']) || empty($_POST['email'])) {
        die("Niste uneli email adresu");
    }

    if(!isset($_POST['password']) || empty($_POST['password'])) {
        die("Niste uneli lozinku");
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    /**
     * @var mysqli $db
     */
    $result = $db->prepare("SELECT * FROM users WHERE email = ?");
    $result->bind_param("s", $email);
    $result->execute();
    $result->store_result();

    if ($result->num_rows < 1) {
        $insert = $db->prepare("INSERT INTO users(name, email, password) VALUES (?, ?, ?)");
        $insert->bind_param("sss", $name, $email, $password);
        if ($insert->execute()) {
            header("Location: ../listFromDb.php");
        } else {
            die("Greska prilikom registrovanja");
        }
    } else {
        die("Korisnik sa ovom email adresom vec postoji");
    }








   












