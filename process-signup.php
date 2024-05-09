<?php

class SignupHandler {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function validateFormData($name, $email, $password1, $password2) {
        if (empty($name)) {
            return "Name is required";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Valid email is required";
        }

        if (strlen($password1) < 8) {
            return "Password must be at least 8 characters";
        }

        if (!preg_match("/[a-z]/i", $password1)) {
            return "Password must contain at least one letter";
        }

        if (!preg_match("/[0-9]/", $password1)) {
            return "Password must contain at least one number";
        }

        if ($password1 !== $password2) {
            return "Passwords must match";
        }

        return true;
    }

    public function signup($name, $email, $password) {
        try {
            // Hashage du mot de passe
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            // Préparation de la requête SQL
            $sql = "INSERT INTO login_db (username, email, password_hash) VALUES (?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);

            // Exécution de la requête en passant les valeurs via un tableau
            if ($stmt->execute([$name, $email, $password_hash])) {
                return "Signup Successful";
            } else {
                $errorCode = $stmt->errorCode();
                if ($errorCode === '23000') {
                    return "Email already taken";
                } else {
                    throw new Exception("Signup failed: " . $stmt->errorInfo()[2]);
                }
            }
        } catch (PDOException $e) {
            // Log the error
            error_log("PDOException: " . $e->getMessage(), 0);
            // Display a generic error message
            return "An error occurred. Please try again later.";
        }
    }
}

// Inclusion du fichier de configuration de la base de données qui contient la connexion PDO
require __DIR__ . "/database.php";

// Create an instance of the SignupHandler class
$signupHandler = new SignupHandler($pdo);

// Vérification des données reçues du formulaire
$validationResult = $signupHandler->validateFormData(
    $_POST["name"],
    $_POST["email"],
    $_POST["password1"],
    $_POST["password2"]
);

if ($validationResult !== true) {
    die($validationResult);
}

// Signup using the SignupHandler instance
echo $signupHandler->signup(
    $_POST["name"],
    $_POST["email"],
    $_POST["password1"]
);

?>
