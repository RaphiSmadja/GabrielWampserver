<?php

include("functions.php");

$mail = $_POST["emailLogin"];
$pwd = $_POST["pwdLogin"];

$user = loginUser($mail, $pwd);

if(isset($user)){
    $_SESSION['idUser'] = $user['id'];
    $_SESSION['mailUser'] = $user['email'];
    $_SESSION['logged_in'] = true; 
    session_start();
} else {
    echo "desole";
}
?>