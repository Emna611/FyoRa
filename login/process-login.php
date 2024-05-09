<?php
session_start();

require_once __DIR__ . "/database.php";

class LoginHandler {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function authenticate($email, $password) {
        try {
            // Préparation de la requête SQL
            $sql = "SELECT id, email, password_hash FROM login_db WHERE email = ?";
            $stmt = $this->pdo->prepare($sql);

            // Exécution de la requête en passant les valeurs via un tableau
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Vérification du mot de passe
            if ($user && password_verify($password, $user["password_hash"])) {
                // Authentification réussie
                $_SESSION["user_id"] = $user["id"];
                return true;
            } else {
                // Authentification échouée
                return false;
            }
        } catch (PDOException $e) {
            // Gestion des erreurs PDO
            throw new Exception("Error: " . $e->getMessage());
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification des données reçues du formulaire
    if (empty($_POST["email"]) || empty($_POST["password1"])) {
        $error = "Both email and password are required";
    } else {
        // Création d'une instance de la classe LoginHandler
        $loginHandler = new LoginHandler($pdo);

        // Tentative d'authentification
        try {
            if ($loginHandler->authenticate($_POST["email"], $_POST["password1"])) {
                // Redirection vers une page sécurisée ou affichage d'un message de succès
                header("Location: index.html");
                exit;
            } else {
                $error = "Invalid email or password";
            }
        } catch (Exception $e) {
            // Gestion des erreurs
            $error = $e->getMessage();
        }
    }
}
?>
