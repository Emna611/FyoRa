<?php
session_start();

// Vérifie si le paramètre d'action est défini et non vide
if (isset($_GET['action']) && !empty($_GET['action'])) {
    // Si l'action est "add", ajouter un article au panier
    if ($_GET['action'] == 'add') {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $productId = $_GET['id'];

            // Récupérer les détails du produit depuis la base de données
            $productDetails = getProductDetails($productId);

            // Ajouter le produit au panier avec toutes les informations nécessaires, y compris l'URL de l'image
            $_SESSION['cart'][$productId] = array(
                'name' => $productDetails['name'],
                'price' => $productDetails['price'],
                'image_url' => $productDetails['image_url'],
                // Ajoutez d'autres détails du produit si nécessaire
            );
        }
    }
    // Si l'action est "remove", supprimer un article du panier
    elseif ($_GET['action'] == 'remove') {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $productId = $_GET['id'];

            // Supprimer le produit du panier
            removeFromCart($productId);
        }
    }
}

// Redirection vers la page précédente
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;

// Fonction pour récupérer les détails du produit depuis la base de données
function getProductDetails($productId) {
    // Connectez-vous à votre base de données et exécutez une requête pour récupérer les détails du produit
    // Remplacez les lignes suivantes par votre propre logique de récupération des données depuis la base de données
    $productDetails = array(
        'name' => 'Nom du produit', // Remplacez par le nom réel du produit récupéré depuis la base de données
        'price' => 10.99, // Remplacez par le prix réel du produit récupéré depuis la base de données
        'image_url' => 'chemin/vers/image.jpg', // Remplacez par l'URL réelle de l'image du produit récupérée depuis la base de données
        // Ajoutez d'autres détails du produit si nécessaire
    );

    return $productDetails;
}

// Fonction pour supprimer un produit du panier
function removeFromCart($productId) {
    // Vérifie si le produit existe dans le panier
    if (isset($_SESSION['cart'][$productId])) {
        // Supprimer le produit du panier
        unset($_SESSION['cart'][$productId]);
    }
}
?>
