<?php

require_once "config.php";

require_once "modelpanierc.php";
class pani {
    public function listpanier()
    {
        $sql = "SELECT * FROM panier";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function count()
{
    $sql = "SELECT count(*) as total FROM panier";
    $db = config::getConnexion();
    try {
        $result = $db->query($sql);
        $row = $result->fetch();
        return (int)$row['total'];
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}


    public function addpanier($panier)
    {
        $sql = "INSERT INTO panier 
                VALUES (null,:price,:nom,:image)";
              
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
              
               'price' => $panier->getprice(),

                'nom' => $panier->getnom(),
                
                'image'=>$panier->getimage()
              
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    public function addoriginale($panier)
    {
        $sql = "INSERT INTO original 
                VALUES (null,:price,:nom,:image)";
              
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare($sql);
            $query->execute([
              
               'price' => $panier->getprice(),
                'nom' => $panier->getnom(),
                'image'=>$panier->getimage()
              
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function deletepanier($id)
    {
        $sql = "DELETE FROM panier WHERE idp = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    
    public function countprice()
{
    $sql = "SELECT SUM(price) as count FROM panier ";
    $db = config::getConnexion();
    
    try {
        $stmt = $db->prepare($sql);

        $stmt->execute();

        $count = $stmt->fetch(PDO::FETCH_ASSOC)['count'];

        return $count;
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    } 
}
public function reset()
{
    try {
        $db = config::getConnexion();
        
        $query = $db->prepare('DELETE FROM panier'); // Corrected SQL query
        $query->execute();

        // Optionally, you can check the number of rows affected
        // echo $query->rowCount() . " records deleted successfully <br>";
    } catch (PDOException $e) {
        echo $e->getMessage(); // Display the error message in case of failure
    }
}

public function showpanier($id_C)
{
    try {
        $sql = "SELECT * FROM panier WHERE id_C = :id_C";
        $db = config::getConnexion();

        $query = $db->prepare($sql);
        $query->execute(['id_C' => $id_C]);

        // Use fetchAll to get all rows from the result set
        return $query->fetchAll();
    } catch (PDOException $e) {
        // Handle any exceptions that occur during the execution of the query
        echo 'Error: ' . $e->getMessage();
    }
}

}
    





?>
