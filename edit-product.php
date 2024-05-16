<?php
// Inclure le fichier database.php
include('database.php');

// Classe pour la gestion de la modification d'un produit
// Classe pour la gestion de la modification d'un produit
class EditProduct {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Méthode pour récupérer les informations d'un produit par son ID
    public function getProductById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Méthode pour mettre à jour un produit dans la base de données
    public function updateProduct($id, $name, $price, $description, $category, $image) {
        try {
            // Vérifier si une nouvelle image a été sélectionnée
            if ($image['size'] > 0) {
                // Chemin du répertoire où les images seront stockées
                $targetDir = "images/";
                // Chemin complet de l'image
                $targetFile = $targetDir . basename($image["name"]);
                // Déplacer l'image téléchargée vers le répertoire d'images
                move_uploaded_file($image["tmp_name"], $targetFile);
                // Mettre à jour le chemin de l'image dans la base de données
                $imagePath = $targetFile;
            } else {
                // Si aucune nouvelle image n'est sélectionnée, conserver l'image existante
                $product = $this->getProductById($id);
                $imagePath = $product['image'];
            }

            // Préparer la requête SQL pour la mise à jour
            $stmt = $this->pdo->prepare("UPDATE products SET name = :name, price = :price, description = :description, category = :category, image = :image WHERE id = :id");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':image', $imagePath);
            $stmt->bindParam(':id', $id);
            // Exécuter la requête
            $stmt->execute();
        } catch (PDOException $e) {
            // Gérer les erreurs PDO
            throw new Exception("Erreur lors de la mise à jour du produit : " . $e->getMessage());
        }
    }
}

// Vérifier si le formulaire a été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si l'ID du produit est passé en paramètre
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Récupérer les données du formulaire
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        try {
            // Créer une instance de la classe DatabaseConnection pour obtenir la connexion PDO
            $database = new DatabaseConnection();
            $pdo = $database->getConnection();

            // Créer une instance de la classe EditProduct pour gérer la modification du produit
            $editProduct = new EditProduct($pdo);

            // Appeler la méthode updateProduct pour mettre à jour le produit dans la base de données
            $editProduct->updateProduct($id, $name, $price, $description, $category, $_FILES['image']);

            // Redirection vers une autre page après la mise à jour
            header("Location: indexAdmin.php");
            exit();
        } catch (Exception $e) {
            // Gérer les erreurs
            echo "Erreur: " . $e->getMessage();
        }
    } else {
        echo "ID du produit non spécifié.";
    }
} else {
    // Vérifier si l'ID du produit est passé en paramètre
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        try {
            // Créer une instance de la classe DatabaseConnection pour obtenir la connexion PDO
            $database = new DatabaseConnection();
            $pdo = $database->getConnection();

            // Créer une instance de la classe EditProduct pour récupérer les informations du produit
            $editProduct = new EditProduct($pdo);

            // Récupérer les informations du produit par son ID
            $product = $editProduct->getProductById($id);

            // Si le produit existe
            if ($product) {
?>
                <!doctype html>
                    <html lang="en">
                    <head>
                        <title>Fyo-Ra</title>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                        <link rel="stylesheet" href="css/style.css">
                    
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
                    <section class="ftco-section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6 text-center mb-5">
                                    <h2 class="heading-section">Add product</h2>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="wrapper">
                                        <div class="row mb-5">
                                            <!-- Vos informations de contact -->
                                        </div>
                                        <section class="ftco-section">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6 text-center mb-5">
                                                        <h2 class="heading-section">Edit product</h2>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-md-12">
                                                        <div class="wrapper">
                                                            <div class="row mb-5">
                                                                <!-- Vos informations de contact -->
                                                            </div>
                                                            <div class="row no-gutters">
                                                                <div class="col-md-7">
                                                                    <div class="contact-wrap w-100 p-md-5 p-4">
                                                                        <!-- Formulaire de modification avec les données pré-remplies -->
                                                                        <form method="POST" id="contactForm" name="contactForm" class="contactForm" enctype="multipart/form-data" action="edit-product.php">
                                                                            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="label" for="name">Product Name</label>
                                                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $product['name']; ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="label" for="price">Price</label>
                                                                                        <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="<?php echo $product['price']; ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="label" for="description">Description</label>
                                                                                        <textarea name="description" class="form-control" id="description" cols="30" rows="4" placeholder="Product description"><?php echo $product['description']; ?></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="label" for="category">Category</label>
                                                                                        <select class="form-control" name="category" id="category">
                                                                                            <option value="">Select a category</option>
                                                                                            <option value="food" <?php if ($product['category'] == 'food') echo 'selected'; ?>>Food</option>
                                                                                            <option value="clothes" <?php if ($product['category'] == 'clothes') echo 'selected'; ?>>Clothes</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="label" for="image">Image Upload</label>
                                                                                        <input type="file" class="form-control-file" name="image" id="image">
                                                                                    </div>
                                                                                    <img src="<?php echo $product['image']; ?>" class="img-fluid" style="max-width: 100px; max-height: 100px;" alt="Current Image">
                                                                                </div>
                                                                            </div></br></br>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <input type="submit" value="Save Changes" class="btn btn-outline-primary btn-lg text-uppercase fs-6 rounded-1">
                                                                                    <div class="submitting"></div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="image-wrap d-flex align-items-center justify-content-center">
                                                                        <img src="images/banner-img4.png" class="img-fluid" alt="Image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </body>
                                    </html>
                    <?php
                                } else {
                                    echo "Produit non trouvé.";
                                }
                            } catch (Exception $e) {
                                // Gérer les erreurs
                                echo "Erreur: " . $e->getMessage();
                            }
                        } else {
                            echo "ID du produit non spécifié.";
                        }
                    }
                    ?>
