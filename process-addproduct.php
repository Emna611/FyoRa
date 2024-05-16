<?php

// process-addproduct.php

// Inclure le fichier de configuration de la base de données PDO
include('database.php');

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    // Chemin de stockage de l'image
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Déplacer le fichier téléchargé vers le répertoire de téléchargement
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    try {
        // Créer une instance de la classe Database
        $database = new DatabaseConnection();

        // Obtenir la connexion PDO
        $pdo = $database->getConnection(); // Utilisez cette ligne pour obtenir la connexion PDO

        // Préparer la requête SQL pour l'insertion
        $stmt = $pdo->prepare("INSERT INTO products (name, description, price, image, category) VALUES (?, ?, ?, ?, ?)"); 

        // Liaison des paramètres
        $stmt->bindValue(1, $name);
        $stmt->bindValue(2, $description);
        $stmt->bindValue(3, $price);
        $stmt->bindValue(4, $target_file); // Utiliser $target_file qui contient le chemin complet de l'image
        $stmt->bindValue(5, $category);

        // Exécution de la requête
        $stmt->execute();

        // Redirection vers une autre page après l'insertion
        header("Location: indexAdmin.php");
        exit();
    } catch (PDOException $e) {
        // Gestion des erreurs PDO
        echo "Erreur: " . $e->getMessage();
    }
}

?>
