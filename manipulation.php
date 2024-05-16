<?php 
 require_once "controllercomm.php";
 require_once "controllerCpan.php";

$no=null;
 $c=new conco();
 $o=new pani();


 $ka=null;
 $pop=$o->listpanier();
 $ka=$c->lastcomm();

 $id=$ka['id_c'];

 foreach($pop as $row ){
    $price=$row['price'];
    $nom=$row['nom'];
   
    $image=$row['image'];

   $c->at($price,$nom,$image,$id);
 }
 $o->reset();
 header('Location: indexUser.php');



 
 
 ?>