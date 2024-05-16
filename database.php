<?php

<<<<<<< HEAD
// Check if the Database class already exists
if (!class_exists('Database')) {

    class Database {
=======
// database.php

// Vérifier si la classe n'est pas déjà définie
if (!class_exists('DatabaseConnection')) {

    // Définir la classe DatabaseConnection
    class DatabaseConnection {
>>>>>>> 06f31ff7d404d64caedd120240c8ead3dbae4954
        private $host = "localhost";
        private $dbname = "fyora";
        private $username = "root";
        private $password = "";
<<<<<<< HEAD

        public function getConnection() {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8";

            try {
                $pdo = new PDO($dsn, $this->username, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch (PDOException $e) {
                throw new PDOException("Erreur de connexion à la base de données : " . $e->getMessage());
            }
        }
    }
=======
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

    
>>>>>>> 06f31ff7d404d64caedd120240c8ead3dbae4954

}

?>
