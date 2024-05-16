<?php
require_once "controllerCpan.php";

$panierC = new pani();
$k=$panierC->count();


if (isset($_POST["nom"], $_POST["price"],$_POST['image'])) {
    if (!empty($_POST["nom"]) && !empty($_POST["price"]) && !empty($_POST["image"])) {
        // Sanitize user input
        $nom=$_POST['nom'];
        $image = htmlspecialchars($_POST['image']);
        $price = floatval($_POST['price']); // Assuming it's a numeric value
        
        // Create a panier object with the incremented id_C
        $panier = new panie(null,$price,$nom,$image);

        $panierC->addpanier($panier);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fyo-Ra</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="style.css"> 

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
  rel="stylesheet">
  
</head>

<body>

  

  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>

  

 

  <header>
  <div class="container py-2">
  <div class="row py-4 pb-0 pb-sm-4 align-items-center">
    <div class="col-sm-4 col-lg-3 text-center text-sm-start">
      <div class="main-logo">
        <img src="images/Fyora.png" alt="logo" class="img-fluid" style="width: 150px;">
      </div>
    </div>

    <div class="col-sm-8 col-lg-4 d-flex justify-content-end gap-5 align-items-center mt-4 mt-sm-0 ms-auto">
      <div class="support-box text-end d-none d-xl-block">
        <span class="fs-6 secondary-font text-muted">Phone</span>
        <h5 class="mb-0">+216-27660987</h5>
      </div>
      
      <div class="support-box text-end d-none d-xl-block">
        <span class="fs-6 secondary-font text-muted">Email</span>
        <h5 class="mb-0">Fyora@gmail.com</h5>
      </div>
    </div>
    
    <div class="d-none d-lg-flex align-items-end ms-auto">
      <ul class="d-flex justify-content-end list-unstyled m-0">
        <li>
          <a href="account.html">
            <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
            <?php if (isset($user)): ?>
            <span class="fs-6 secondary-font text-muted">
              <p style="color: #916743;">Welcome <?= htmlspecialchars($user["username"]) ?></p>
            </span>
            <p><a href="logout.php">Log out</a></p>
            <?php else: ?>
            <p><a href="login.php" style="color: #DEAD6F;">Log in</a> or 
              <a href="signup.html" style="color: #DEAD6F;">Sign up</a>
            </p>
            <?php endif; ?>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid">
  <hr class="m-0">
</div>

<div class="container">
      <nav class="main-menu d-flex navbar navbar-expand-lg ">

        <div class="d-flex d-lg-none align-items-end mt-3">
          <ul class="d-flex justify-content-end list-unstyled m-0">
            <li>
              <a href="account.html" class="mx-3">
                <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
              </a>
            </li>

            <li>
              <a href="addtocart.html" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                aria-controls="offcanvasCart">
                <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                  8
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                aria-controls="offcanvasSearch">
                <iconify-icon icon="tabler:search" class="fs-4"></iconify-icon>
                </span>
              </a>
            </li>
          </ul>

        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body justify-content-between">
           

            <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
              <li class="nav-item">
                <a href="index.html" class="nav-link active">Home</a>
              </li>
              
              <li class="nav-item">
                <a href="shop.php" class="nav-link">Shop</a>
              </li>
              <li class="nav-item">
                <a href="contact.html" class="nav-link">Contact</a>
              </li>
             
            </ul>

            <div class="d-none d-lg-flex align-items-end">
              <ul class="d-flex justify-content-end list-unstyled m-0">
               
               

                <li class="">
                  <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                    aria-controls="offcanvasCart">
                   <a href="panier.php"><iconify-icon href="panier.php" icon="mdi:cart" class="fs-4 position-relative"></iconify-icon></a> 
                    <a href="panier.php"class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                      
                    <?php echo $k ;?>
                    </a>
                  </a>
                </li>
              </ul>

            </div>

          </div>

        </div>

      </nav>



    </div>

</header>
  <section id="banner" style="background: #F9F3EC;">
    <div class="container">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide py-5">
            <div class="row banner-content align-items-center">
              <div class="img-wrapper col-md-5">
                <img src="images/banner-img.png" class="img-fluid">
              </div>
              <div class="content-wrapper col-md-7 p-5 mb-5">

                <h2 class="banner-title display-1 fw-normal">Best destination for <span class="text-primary">your
                    pets</span>
                </h2>
                <a href="shop.php" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                  shop now
                  <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                    <use xlink:href="#arrow-right"></use>
                  </svg></a>
              </div>

            </div>
          </div>
          <div class="swiper-slide py-5">
            <div class="row banner-content align-items-center">
              <div class="img-wrapper col-md-5">
                <img src="images//banner-img3.png" class="img-fluid">
              </div>
              <div class="content-wrapper col-md-7 p-5 mb-5">
               
                <h2 class="banner-title display-1 fw-normal">Best destination for <span class="text-primary">your
                    pets</span>
                </h2>
                <a href="shop.php" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                  shop now
                  <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                    <use xlink:href="#arrow-right"></use>
                  </svg></a>
              </div>

            </div>
          </div>
      
    
        </div>

        <div class="swiper-pagination mb-5"></div>

      </div>
    </div>
  </section>

  <section id="categories">
    <div class="container my-3 py-5">
      <div class="row my-5">
        
        <div class="col text-center">
          <a href="#" class="categories-item">
            <iconify-icon class="category-icon" icon="ph:dog"></iconify-icon>
            <h5>Dog Shop</h5>
          </a>
        </div>
        <div class="col text-center">
          <a href="#" class="categories-item">
            <iconify-icon class="category-icon" icon="ph:cat"></iconify-icon>
            <h5>Cat Shop</h5>
          </a>
        </div>
      </div>
    </div>
  </section>



  <?php

// index.php

// Inclure le fichier de configuration de la base de données PDO
include('database.php');

// Créer une instance de la classe Database
$database = new DatabaseConnection();

try {
    // Obtenir la connexion PDO en utilisant la méthode getConnection()
    $pdo = $database->getConnection();

    // Requête SQL pour sélectionner les produits de la catégorie "Clothes"
    $sql = "SELECT * FROM products WHERE category = 'clothes'";
    $stmt = $pdo->query($sql);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

<section id="clothing" class="my-5 overflow-hidden">
    <div class="container pb-5">
        <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
            <h2 class="display-3 fw-normal">Pet Clothing</h2>
        </div>

        <div class="products-carousel swiper">
            <div class="swiper-wrapper">
            <form method="POST" action="#">
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="swiper-slide">
            <div class="card position-relative">
                <a href="" name="image"><img src="<?php echo $row['image']; ?>" class=" img-fluid rounded-4 " style="height: 200px; width: 250px" alt="image"></a>
                <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                <div class="card-body p-0">
                    <a href="">
                        <h3 class="card-title pt-4 m-0"><?php echo $row['name']; ?></h3>
                        <input type="hidden" name="nom" value="<?php echo $row['name']; ?>">
                    </a>

                    <div class="card-text">
                        <h3 class="secondary-font text-primary"><?php echo $row['price']; ?> DT</h3>
                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                        <h4 class="secondary-font text-primary"><?php echo $row['category']; ?></h4>
                        <div class="d-flex flex-wrap mt-3">
                            <p><?php echo $row['description']; ?></p>
                        </div>
                        <div class="d-flex flex-wrap mt-3">
                            <input type="submit" class="btn btn-cart me-3 px-4 pt-3 pb-3" value="Add to Cart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</form>

            </div>
        </div>
        <!-- / products-carousel -->

    </div>
</section>


<?php

// index.php

// Inclure le fichier de configuration de la base de données PDO
include('database.php');

// Créer une instance de la classe Database
$database = new DatabaseConnection();

try {
    // Obtenir la connexion PDO en utilisant la méthode getConnection()
    $pdo = $database->getConnection();

    // Requête SQL pour sélectionner les produits de la catégorie "food"
    $sql = "SELECT * FROM products WHERE category = 'food'";
    $stmt = $pdo->query($sql);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

<section id="foodies" class="my-5 overflow-hidden">
    <div class="container my-5 py-5">
        <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
            <h2 class="display-3 fw-normal">Pet Foodies</h2>
        </div>

        <div class="products-carousel swiper">
            <div class="swiper-wrapper">
                <?php
                // Parcourir les résultats et afficher les produits
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="swiper-slide">
                        <div class="card position-relative">
                            <a href="single-product.html"><img src="<?php echo $row['image']; ?>" class="img-fluid rounded-4" style="height: 200px; width: 250px" alt="image"></a>
                            <div class="card-body p-0">
                                <a href="single-product.html">
                                    <h3 class="card-title pt-4 m-0"><?php echo $row['name']; ?></h3>
                                </a>

                                <div class="card-text">
                                    <h3 class="secondary-font text-primary"><?php echo $row['price']; ?> DT</h3>
                                    <h4 class="secondary-font text-primary"><?php echo $row['category']; ?></h4>
                                    <div class="d-flex flex-wrap mt-3">
                                        <p><?php echo $row['description']; ?></p>
                                    </div>  
                                    <div class="d-flex flex-wrap mt-3">
                                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                        <div class="d-flex flex-wrap mt-3">
                                          <input type="submit" class="btn btn-cart me-3 px-4 pt-3 pb-3" value="Add to Cart">
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- / products-carousel -->

    </div>
</section>



  <section id="banner-2" class="my-3" style="background: #F9F3EC;">
    <div class="container">
      <div class="row flex-row-reverse banner-content align-items-center">
        <div class="img-wrapper col-12 col-md-6">
          <img src="images/banner-img2.png" class="img-fluid">
        </div>
        <div class="content-wrapper col-12 offset-md-1 col-md-5 p-5">

          <h2 class="banner-title display-1 fw-normal">Clearance sale !!!
          </h2>
          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
            shop now
            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
              <use xlink:href="#arrow-right"></use>
            </svg></a>
        </div>

      </div>
    </div>
  </section>

  <section id="testimonial">
    <div class="container my-5 py-5">
      <div class="row">
        <div class="offset-md-1 col-md-10">
          <div class="swiper testimonial-swiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="row ">
                  <div class="col-2">
                    <iconify-icon icon="ri:double-quotes-l" class="quote-icon text-primary"></iconify-icon>
                  </div>
                  <div class="col-md-10 mt-md-5 p-5 pt-0 pt-md-5">
                    <p class="testimonial-content fs-2">At the core of our practice is the idea that cities are the
                      incubators of our
                      greatest achievements, and the best hope for a sustainable future.</p>
                   
                  </div>
                </div>
              </div>
              
              

            </div>

            <div class="swiper-pagination"></div>

          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="bestselling" class="my-5 overflow-hidden">
    <div class="container py-5 mb-5">

      <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
        <h2 class="display-3 fw-normal">Best selling products</h2>
        <div>
          <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
            shop now
            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
              <use xlink:href="#arrow-right"></use>
            </svg></a>
        </div>
      </div>

      <div class=" swiper bestselling-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
           
            <div class="card position-relative">
              <a href="single-product.html"><img src="images/item5.jpg" class="img-fluid rounded-4" alt="image"></a>
              <div class="card-body p-0">
                <a href="single-product.html">
                  <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                </a>

                <div class="card-text">
                  

                  <h3 class="secondary-font text-primary">$18.00</h3>

                  <div class="d-flex flex-wrap mt-3">
                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                      <h5 class="text-uppercase m-0">Add to Cart</h5>
                    </a>
                  
                  </div>


                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
         
            <div class="card position-relative">
              <a href="single-product.html"><img src="images/item6.jpg" class="img-fluid rounded-4" alt="image"></a>
              <div class="card-body p-0">
                <a href="single-product.html">
                  <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                </a>

                <div class="card-text">
                 

                  <h3 class="secondary-font text-primary">$18.00</h3>

                  <div class="d-flex flex-wrap mt-3">
                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                      <h5 class="text-uppercase m-0">Add to Cart</h5>
                    </a>
                  
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            
            <div class="card position-relative">
              <a href="single-product.html"><img src="images/item7.jpg" class="img-fluid rounded-4" alt="image"></a>
              <div class="card-body p-0">
                <a href="single-product.html">
                  <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                </a>

                <div class="card-text">
                  

                  <h3 class="secondary-font text-primary">$18.00</h3>

                  <div class="d-flex flex-wrap mt-3">
                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                      <h5 class="text-uppercase m-0">Add to Cart</h5>
                    </a>
                    
                  </div>


                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
           
            <div class="card position-relative">
              <a href="single-product.html"><img src="images/item8.jpg" class="img-fluid rounded-4" alt="image"></a>
              <div class="card-body p-0">
                <a href="single-product.html">
                  <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                </a>

                <div class="card-text">
                  

                  <h3 class="secondary-font text-primary">$18.00</h3>

                  <div class="d-flex flex-wrap mt-3">
                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                      <h5 class="text-uppercase m-0">Add to Cart</h5>
                    </a>
                    
                  </div>


                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
          
            <div class="card position-relative">
              <a href="single-product.html"><img src="images/item3.jpg" class="img-fluid rounded-4" alt="image"></a>
              <div class="card-body p-0">
                <a href="single-product.html">
                  <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                </a>

                <div class="card-text">
                 

                  <h3 class="secondary-font text-primary">$18.00</h3>

                  <div class="d-flex flex-wrap mt-3">
                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                      <h5 class="text-uppercase m-0">Add to Cart</h5>
                    </a>
                  
                  </div>


                </div>

              </div>
            </div>
          </div>
          <div class="swiper-slide">
            
            <div class="card position-relative">
              <a href="single-product.html"><img src="images/item4.jpg" class="img-fluid rounded-4" alt="image"></a>
              <div class="card-body p-0">
                <a href="single-product.html">
                  <h3 class="card-title pt-4 m-0">Grey hoodie</h3>
                </a>

                <div class="card-text">
               
                  <h3 class="secondary-font text-primary">$18.00</h3>

                  <div class="d-flex flex-wrap mt-3">
                    <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                      <h5 class="text-uppercase m-0">Add to Cart</h5>
                    </a>
                    
                  </div>


                </div>

              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- / category-carousel -->


    </div>
  </section>

  


  <section id="service">
    <div class="container py-5 my-5">
      <div class="row g-md-5 pt-4">
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:shopping-cart"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">Free Delivery</h3>
            
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:user-check"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">100% secure payment</h3>
            
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:tag"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">Daily Offer</h3>
            
          </div>
        </div>
        <div class="col-md-3 my-3">
          <div class="card">
            <div>
              <iconify-icon class="service-icon text-primary" icon="la:award"></iconify-icon>
            </div>
            <h3 class="card-title py-2 m-0">Quality guarantee</h3>
     
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="insta" class="my-5">
    <div class="row g-0 py-5">
      <div class="col instagram-item  text-center position-relative">
        <div class="icon-overlay d-flex justify-content-center position-absolute">
          <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
        </div>
        <a href="#">
          <img src="images/insta1.jpg" alt="insta-img" class="img-fluid rounded-3">
        </a>
      </div>
      <div class="col instagram-item  text-center position-relative">
        <div class="icon-overlay d-flex justify-content-center position-absolute">
          <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
        </div>
        <a href="#">
          <img src="images/insta2.jpg" alt="insta-img" class="img-fluid rounded-3">
        </a>
      </div>
      <div class="col instagram-item  text-center position-relative">
        <div class="icon-overlay d-flex justify-content-center position-absolute">
          <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
        </div>
        <a href="#">
          <img src="images/insta3.jpg" alt="insta-img" class="img-fluid rounded-3">
        </a>
      </div>
      <div class="col instagram-item  text-center position-relative">
        <div class="icon-overlay d-flex justify-content-center position-absolute">
          <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
        </div>
        <a href="#">
          <img src="images/insta4.jpg" alt="insta-img" class="img-fluid rounded-3">
        </a>
      </div>
      <div class="col instagram-item  text-center position-relative">
        <div class="icon-overlay d-flex justify-content-center position-absolute">
          <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
        </div>
        <a href="#">
          <img src="images/insta5.jpg" alt="insta-img" class="img-fluid rounded-3">
        </a>
      </div>
      <div class="col instagram-item  text-center position-relative">
        <div class="icon-overlay d-flex justify-content-center position-absolute">
          <iconify-icon class="text-white" icon="la:instagram"></iconify-icon>
        </div>
        <a href="#">
          <img src="images/insta6.jpg" alt="insta-img" class="img-fluid rounded-3">
        </a>
      </div>
    </div>
  </section>

  <footer id="footer" class="my-5">
    <div class="container py-5 my-5">
      <div class="row">

        <div class="col-md-3">
          <div class="footer-menu">
            <img src="images/Fyora.png" alt="logo" style="width: 200px;">
            <p class="blog-paragraph fs-6 mt-3">Subscribe to our newsletter to get updates about our grand offers.</p>
            <div class="social-links">
              <ul class="d-flex list-unstyled gap-2">
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:facebook-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:twitter-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:pinterest-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:instagram-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:youtube-fill"></iconify-icon>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3>Quick Links</h3>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="nav-link">Home</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">About us</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Services</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Conatct Us</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3>Help Center</h5>
              <ul class="menu-list list-unstyled">
                <li class="menu-item">
                  <a href="#" class="nav-link">FAQs</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Payment</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Returns & Refunds</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Checkout</a>
                </li>
                <li class="menu-item">
                  <a href="#" class="nav-link">Delivery Information</a>
                </li>
              </ul>
          </div>
        </div>
        

      </div>
    </div>
    
  </footer>

  <div id="footer-bottom">
    <div class="container">
      <hr class="m-0">
      <div class="row mt-3">
        <div class="col-md-6 copyright">
          <p class="secondary-font">© 2023 Fyora.</p>
        </div>
      </div>
    </div>
  </div>


  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>