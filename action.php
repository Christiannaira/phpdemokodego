<?php

session_start();

//take database

$dbUsername = 'admin';
$dbPassword = 'admin123';

if ($_POST['username'] == $dbUsername && $_POST['password'] == $dbPassword) {
    $_SESSION['isLoggedIn'] = true;
    header('Location: home.php');

} else {
    $_SESSION['error'] = "Invalid username or password!";
    header("Location: index.php");
}


?>