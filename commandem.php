<?php 
class commandeM {
    private $id;
    private $email;
    private $tel;
    private $nom;
    private $adress;

    public function __construct($id, $email, $tel, $nom, $adress) {
        $this->id = $id;
        $this->email = $email;
        $this->tel = $tel;
        $this->nom = $nom;
        $this->adress = $adress;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getAdress() {
        return $this->adress;
    }
public function setid($id){
    $this->id=$id;

}
public function settel($tel){
    $this->tel=$tel;

}
public function setemail($email){
    $this->email=$email;
    
}
public function setadresse($adresse){
    $this->adresse=$adresse;
    
}



}