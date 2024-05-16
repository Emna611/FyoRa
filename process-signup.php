<?php
// Include your PDO database connection file
require_once __DIR__ . "/database.php";

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

    public function signup($name, $email, $password, $userType) {
        try {
            // Hash the password
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            // Prepare SQL statement
            $sql = "INSERT INTO login_db (username, email, password_hash, user_type) VALUES (?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);

            // Execute the statement with parameter binding
            if ($stmt->execute([$name, $email, $password_hash, $userType])) {
                header("Location: signup_success.html");
                exit(); // Exit after redirect
            } else {
                $errorCode = $stmt->errorCode();
                if ($errorCode === 23000) { // Duplicate entry error code
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
$pdo = new PDO("mysql:host=localhost;dbname=fyora;charset=utf8", "root", "");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Create an instance of the SignupHandler class with the PDO connection
    $signupHandler = new SignupHandler($pdo);

    // Validate form data
    $validationResult = $signupHandler->validateFormData(
        $_POST["name"],
        $_POST["email"],
        $_POST["password1"],
        $_POST["password2"]
    );

    // If validation fails, display error message and stop further execution
    if ($validationResult !== true) {
        die($validationResult);
    }

    // Sign up using the SignupHandler instance
    echo $signupHandler->signup(
        $_POST["name"],
        $_POST["email"],
        $_POST["password1"],
        ($_POST['userType'] == 'user') ? 'user' : 'admin' // Get user type from form
    );
}
?>
