<?php
// Include your PDO database connection file
require_once __DIR__ . "/database.php";

// Instantiate the Database class to get the PDO connection object
$db = new DatabaseConnection();
$pdo = $db->getConnection();

// Initialize email availability flag
$is_available = false;

// Check if email parameter is set
if (isset($_GET["email"])) {
    // Prepare SQL statement to select user with the given email
    $sql = "SELECT * FROM login_db WHERE email = :email";

    // Prepare the statement
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':email', $_GET["email"]);

    // Execute the statement
    $stmt->execute();

    // Fetch the user data
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if user with the given email exists
    $is_available = !$user;
}

// Set response content type to JSON
header("Content-Type: application/json");

// Output JSON response
echo json_encode(["available" => $is_available]);
?>
