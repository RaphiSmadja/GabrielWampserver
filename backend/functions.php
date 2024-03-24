<?php
// all functions servers

require "pdo.php";

function insertUser($mail,$pseudo,$pwd) {
    $pdo = connectBdd();
    $sql = "INSERT INTO user (email, pseudo, password) VALUES (?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$mail, $pseudo, $pwd]);
}

function loginUser($mail, $pwd) {
    $pdo = connectBdd();
    $sql = "SELECT * FROM user WHERE (email = ? AND password = ?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$mail, $pwd]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

?>