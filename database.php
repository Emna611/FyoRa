<?php

// Check if the Database class already exists
if (!class_exists('Database')) {

    class Database {
        private $host = "localhost";
        private $dbname = "fyora";
        private $username = "root";
        private $password = "";

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

}

?>
