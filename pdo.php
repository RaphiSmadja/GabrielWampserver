<?php
    $host = "localhost";
    $dbname = "gabriel";
    $login = "root";
    $password = "";
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
        // Définir le mode d'erreur de PDO sur exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
return $pdo;
?>