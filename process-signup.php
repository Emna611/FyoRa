<?php
if (empty($_POST["name"])){
    die("Name is required"); //die :le script s’arrête immédiatement et le message spécifié est affiché
}

if ( ! filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){ // filter_var :valide l’adresse e-mail.
    die ("Valid email is required");
}

if (strlen($_POST["password1"])<8){ //strlen :utilisée pour obtenir la longueur d’une chaîne de caractères
    die ("Password must be at least 8 characters");
}


if ( ! preg_match("/[a-z]/i",$_POST["password1"])){ //preg_match : est utilisée pour effectuer une recherche de correspondance avec une expression 
    die("Password must contain at least one letter");
}
if ( ! preg_match("/[0-9]/",$_POST["password1"])){ //preg_match : est utilisée pour effectuer une recherche de correspondance avec une expression 
    die("Password must contain at least one letter");
}


if ($_POST["password1"] !== $_POST["password2"]){
    die("Passwords must match");
 }

$password_hash=password_hash($_POST["password1"],PASSWORD_DEFAULT);

print_r($_POST); 
var_dump($password_hash);//



?>