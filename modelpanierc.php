<?php 
class panie{

private $idc;
private $price;
private $nom;
private $image;
public function __construct($idc = null,$price,$nom,$image) {

    $this->idc = $idc;
    $this->price = $price;
    $this->nom = $nom;
    $this->image=$image;


}
public function getidc(){
    return $this->idc;
}
public function getprice(){
    return $this->price;
}
public function getnom(){
    return $this->nom;
}
public function getimage(){
    return $this->image;
}
public function setidc($idc){
    $this->idc=$idc;

}
public function setprice($price){
    $this->price=$price;
    
}
public function setimage($image){
    $this->image=$image;
    
}



}