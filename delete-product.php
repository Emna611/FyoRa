<?php
// Inclure le fichier database.php
include('database.php');

// Classe pour la gestion de la suppression d'un produit
class DeleteProduct {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Méthode pour supprimer un produit de la base de données par son ID
    public function deleteProductById($id) {
        try {
            // Préparer la requête SQL pour la suppression
            $stmt = $this->pdo->prepare("DELETE FROM products WHERE id = ?");
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            // Gérer les erreurs PDO
            throw new Exception("Erreur lors de la suppression du produit : " . $e->getMessage());
        }
    }
}

// Vérifier si l'ID du produit à supprimer est passé en paramètre
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Créer une instance de la classe DatabaseConnection pour obtenir la connexion PDO
        $database = new DatabaseConnection();
        $pdo = $database->getConnection();

        // Créer une instance de la classe DeleteProduct pour gérer la suppression du produit
        $deleteProduct = new DeleteProduct($pdo);

        // Appeler la méthode deleteProductById pour supprimer le produit de la base de données
        $deleteProduct->deleteProductById($id);

        // Redirection vers une autre page après la suppression
        header("Location: indexAdmin.php");
        exit();
    } catch (Exception $e) {
        // Gérer les erreurs
        echo "Erreur: " . $e->getMessage();
    }
} else {
    echo "ID du produit à supprimer non spécifié.";
}
?>
