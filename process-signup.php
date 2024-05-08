<?php
// Vérification des données reçues du formulaire
if (empty($_POST["name"])) {
    die("Name is required");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password1"]) < 8) {
    die("Password must be at least 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST["password1"])) {
    die("Password must contain at least one letter");
}

if (!preg_match("/[0-9]/", $_POST["password1"])) {
    die("Password must contain at least one number");
}

if ($_POST["password1"] !== $_POST["password2"]) {
    die("Passwords must match");
}

// Hashage du mot de passe
$password_hash = password_hash($_POST["password1"], PASSWORD_DEFAULT);

// Inclusion du fichier de configuration de la base de données qui contient la connexion PDO
require __DIR__ . "/database.php";

try {
    // Préparation de la requête SQL
    $sql = "INSERT INTO login_db (username, email, password_hash) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Exécution de la requête en passant les valeurs via un tableau
    $stmt->execute([$_POST["name"], $_POST["email"], $password_hash]);

    echo "Signup Successful";
} catch (PDOException $e) {
    // Gestion des erreurs PDO
    die("Error: " . $e->getMessage());
}
?>
