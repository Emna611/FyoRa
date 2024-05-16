<?php

class SearchHandler {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function searchProducts($searchTerm) {
        try {
            // Requête SQL pour rechercher des produits par nom
            $sql = "SELECT * FROM products WHERE name LIKE :search";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':search', '%' . $searchTerm . '%');
            $stmt->execute();

            // Récupérer les résultats de la recherche
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Retourner les résultats au format JSON
            return json_encode($results);
        } catch (PDOException $e) {
            // Gérer les erreurs
            return "Erreur : " . $e->getMessage();
        }
    }
}

// Vérifier si la chaîne de recherche est présente dans la requête POST
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Inclure le fichier de configuration de la base de données PDO
    include('database.php');

    try {
        // Obtenir la connexion PDO en utilisant la méthode getConnection()
        $database = new DatabaseConnection();
        $pdo = $database->getConnection();

        // Créer une instance de SearchHandler
        $searchHandler = new SearchHandler($pdo);

        // Rechercher des produits
        echo $searchHandler->searchProducts($searchTerm);
    } catch (PDOException $e) {
        // Gérer les erreurs de connexion à la base de données
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }
}

?>
