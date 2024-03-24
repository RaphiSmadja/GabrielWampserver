<?php
$pdo = include("pdo.php");

$pseudo = $_POST["pseudoKey"];
$mail = $_POST["emailKey"];
$pwd = $_POST["pwdKey"];

$msgError = "";
if(isset($pseudo) && strlen($pseudo) <5) {
    $msgError .= "<p> votre pseudo est invalide </p>";
}
if(isset($mail) && strlen($mail) < 5 && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $msgError .= "<p> votre mail est invalide </p>";
}
if(isset($pwd) && strlen($pwd) < 5 ) {
    $msgError .= "<p> votre mot de passe est invalide </p>";
}

if(strlen($msgError) == 0) {
    $sql = "INSERT INTO user (email, pseudo, password) VALUES (?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$mail, $pseudo, $pwd]);
    header('Location: index.php');
} else {
    echo($msgError);
}

?>