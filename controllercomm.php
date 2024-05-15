<?php 
require_once "config.php";
require_once "commandem.php";

class conco{
    public function liscomm()
    {
        $sql = "SELECT * FROM commande";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function addcomm($panier) {
        $db = config::getConnexion();
        $sql = "INSERT INTO commande (email, telephone, nom, adresse) VALUES (:email, :tel, :nom, :adress)";
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':email', $panier->getEmail());
            $query->bindValue(':tel', $panier->getTel());
            $query->bindValue(':nom', $panier->getNom());
            $query->bindValue(':adress', $panier->getAdress());
            $query->execute();
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function at($price, $nom, $image, $id_or)
    {
        $db = config::getConnexion();
        $sql = "INSERT INTO originale (price, nom, image, id_or) VALUES (:price, :nom, :image, :id_or)";
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':price', $price);
            $query->bindValue(':nom', $nom);
            $query->bindValue(':image', $image);
            $query->bindValue(':id_or', $id_or);
            $query->execute();
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
        public function lastcomm()
    {
        $sql = "SELECT * FROM commande ORDER BY id_c DESC LIMIT 1";
        $db = config::getConnexion();
        try {
            $stmt = $db->query($sql);
            $lastCommand = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch the single result as an associative array
            return $lastCommand;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
















}
?>

