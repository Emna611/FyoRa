<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
<section id="clothing" class="my-5 overflow-hidden">
    <div class="container pb-5">
        <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
        <a href="indexUser.php" class=" btn-primary"><img src="images/icons8-gauche-50.png">       Retour à l'accueil</a>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            // Inclure le fichier de configuration de la base de données PDO
            include('database.php');

            // Créer une instance de la classe Database
            $database = new DatabaseConnection();

            try {
                // Obtenir la connexion PDO en utilisant la méthode getConnection()
                $pdo = $database->getConnection();

                // Requête SQL pour sélectionner les produits
                $sql = "SELECT * FROM products";
                $stmt = $pdo->query($sql);

                // Afficher les produits
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <div class="col">
                        <div class="card position-relative">
                            <a href="single-product.html"><img src="<?php echo $row['image']; ?>" class="img-fluid rounded-4" style="height: 200px; width: 250px;" alt="image"></a>
                            <div class="card-body p-0">
                                <a href="single-product.html">
                                    <h3 class="card-title pt-4 m-0"><?php echo $row['name']; ?></h3>
                                </a>

                                <div class="card-text">
                                    <h3 class="secondary-font text-primary"><?php echo $row['price']; ?> DT</h3>
                                    <h4 class="secondary-font text-primary"><?php echo $row['category']; ?></h4>
                                    <div class="d-flex flex-wrap mt-3">
                                        <p><?php echo $row['description']; ?></p>
                                    </div>
                                    <div class="d-flex flex-wrap mt-3">
                                        <a href="panier.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php   
                }
            } catch (PDOException $e) {
                // En cas d'erreur, afficher l'erreur
                echo "Erreur: " . $e->getMessage();
            }
            ?>
        </div>
    </div>
</section>


