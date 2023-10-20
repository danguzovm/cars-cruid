<?php
/**
 * Bootstrap fajl - treba da sadrzi neke najvaaznije stvari
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once 'config.php';

$db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

