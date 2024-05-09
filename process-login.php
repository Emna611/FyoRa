<?php
session_start();

require_once __DIR__ . "/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification des données reçues du formulaire
    if (empty($_POST["email"]) || empty($_POST["password1"])) {
        $error = "Both email and password are required";
    } else {
        try {
            // Préparation de la requête SQL
            $sql = "SELECT id, email, password_hash FROM login_db WHERE email = ?";
            $stmt = $pdo->prepare($sql);

            // Exécution de la requête en passant les valeurs via un tableau
            $stmt->execute([$_POST["email"]]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Vérification du mot de passe
            if ($user && password_verify($_POST["password1"], $user["password_hash"])) {
                // Authentification réussie, rediriger vers une page sécurisée ou afficher un message de succès
                $_SESSION["user_id"] = $user["id"];
                header("Location: index.html");
                exit;
            } else {
                $error = "Invalid email or password";
            }
        } catch (PDOException $e) {
            // Gestion des erreurs PDO
            $error = "Error: " . $e->getMessage();
        }
    }
}
?>
