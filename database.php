<?php

// database.php

// Vérifier si la classe n'est pas déjà définie
if (!class_exists('DatabaseConnection')) {

    // Définir la classe DatabaseConnection
    class DatabaseConnection {
        private $host = "localhost";
        private $dbname = "fyora";
        private $username = "root";
        private $password = "";
        public $pdo;

        public function __construct() {
            try {
                $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Erreur de connexion à la base de données : " . $e->getMessage();
                exit;
            }
        }

        // Méthode pour obtenir la connexion PDO
        public function getConnection() {
            return $this->pdo;
        }
    }

    

}

?>
