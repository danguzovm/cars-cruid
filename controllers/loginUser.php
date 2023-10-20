<?php

    require_once dirname(__DIR__) . '/include/bootstrap.php';

    if(!isset($_POST['email']) || empty($_POST['email'])) {
        die("Niste uneli email adresu");
    }

    if(!isset($_POST['password']) || empty($_POST['password'])) {
        die("Niste uneli lozinku");
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $db->query("SELECT * FROM users WHERE email = '$email'");

    if($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $verifypassword = password_verify($password, $user['password']);
            if($verifypassword == true) {
                $_SESSION['auth_user'] = $user;
                header("Location: ../view/listFromDb.php");
            } else {
               echo "Zaboravili ste lozinku?";
            }

    } else {
        echo "Korisnik sa ovom email adresom vec postoji";
    }




    
