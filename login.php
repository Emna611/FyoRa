<?php
session_start();
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Include your PDO database connection file
    require_once __DIR__ . "/database.php";

    // Create a new instance of the Database class to get the PDO connection object
    $db = new DatabaseConnection();
    $pdo = $db->getConnection();

    // Debugging: Check if $pdo is an instance of PDO
    if (!($pdo instanceof PDO)) {
        die("Database connection error."); // Or handle the error appropriately
    }
    


    $stmt = $pdo->prepare("SELECT * FROM login_db WHERE email = ?");
    $stmt->execute([$_POST["email"]]);
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($_POST["password"], $user["password_hash"])) {
        // Check if the user is an admin
        if ($_POST["userType"] == "admin" && $user["user_type"] == "admin") {
            $_SESSION["user_id"] = $user["ID"];
            header("Location: indexAdmin.php"); // Redirect to admin dashboard
            exit;
        } elseif ($_POST["userType"] == "user" && $user["user_type"] == "user") {
            $_SESSION["user_id"] = $user["ID"];
            header("Location: indexUser.php"); // Redirect to user dashboard
            exit;
        } else {
            $is_invalid = true;
        }
    } else {
        $is_invalid = true;
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fyo-Ra</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
      rel="stylesheet">
</head>
<body>
    <section>
        <div class="container">
            <div class="logo-par">
                <h1>Fyo-Ra</h1>
            </div>
            <div class="row my-5 py-5 align-items-center">
                <div class="col-md-12">
                    <div class="vd">
                        <video id="video" autoplay loop muted>
                            <source src="images/page_sign_up.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
            <div class="rown">
                <div class="offset-md-0 col-md-12">
                    <div class="offset-md-1 col-md-6 ">
                        <div class="sign-up">
                            <h5 style="color: #DEAD6F;">&#x1F5A4; Welcome Back &#x1F5A4;</h5>
                            <h1>Please Log In</h1>
                        </div><br>
                            
                        <form method="post">
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-lg" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" placeholder="Enter your Email Address">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Enter your Password">
                            </div>
                            <fieldset>
                                <h5>I'm a:</h5>
                                <label for="userTypeUser">
                                    <input type="radio" id="userTypeUser" name="userType" value="user" required>
                                    User
                                </label>
                                |
                                <label for="userTypeAdmin">
                                    <input type="radio" id="userTypeAdmin" name="userType" value="admin" required>
                                    Admin
                                </label>
                            </fieldset>
                            
                            <div class="d-grid gap-2">
                                <?php if ($is_invalid):?>
                                    <em style="color: red;">Invalid login</em>
                                <?php endif;?>
                                <button type="submit" class="btn btn-dark btn-lg rounded-1">Login now</button>
                            
                             
                            </div>
                          <div>
                          <a href="signup.html" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                                    Signup !
                                </a>
                          </div>
                        </form>
                                
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
