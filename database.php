<?php

$host = "localhost";
$dbname = "fyora";
$username = "root";
$password = "";

// Data Source Name 
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Return the PDO connection object
    return $pdo;
} catch (PDOException $e) {
    // In case of connection error, throw an exception
    throw new PDOException("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>