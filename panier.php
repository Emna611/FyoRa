<?php
require_once "controllerCpan.php";
$po=new pani();
$loi=$po->listpanier();
$f=$po->countprice();
$k=$po->count();
?>



<html lang="en"><head>
  <title>Fyo-Ra</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="style.css"> 

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Chilanka&amp;family=Montserrat:wght@300;400;500&amp;display=swap" rel="stylesheet">
  
</head>

<body>

  

  <div class="preloader-wrapper" style="display: none;">
    <div class="preloader">
    </div>
  </div>

  

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch" aria-labelledby="Search">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
   
  </div>

  <header>
    <div class="container py-2">
      <div class="row py-4 pb-0 pb-sm-4 align-items-center ">

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
              <a href="addtocart.html" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                <span class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
              
                </span>
              </a>
            </li>

            <li>
              <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch" aria-controls="offcanvasSearch">
                <iconify-icon icon="tabler:search" class="fs-4"></iconify-icon>
                
              </a>
            </li>
          </ul>

        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body justify-content-between">
            

            <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
              <li class="nav-item">
                <a href="indexUser.php" class="nav-link ">Home</a>
              </li>
              
              <li class="nav-item">
                <a href="shop.php" class="nav-link">Shop</a>
              </li>
              <li class="nav-item">
                <a href="contact.html" class="nav-link">Contact</a>
              </li>
              
              <li class="nav-item">
                <a href="indexUser.php" class="nav-link active">panier</a>
              </li>
            </ul>

            <div class="d-none d-lg-flex align-items-end">
              <ul class="d-flex justify-content-end list-unstyled m-0">
                <li>
                  <a href="commande.php" class="mx-3">
                 Passe au commande 
                  </a>
                </li>
               

                <li class="">
                  <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                   </a><a href="panier.php"><iconify-icon href="panier.php" icon="mdi:cart" class="fs-4 position-relative"></iconify-icon></a> 
                    <a href="panier.php" class="position-absolute translate-middle badge rounded-circle bg-primary pt-2">
                      
                    <?php echo $k ;?>
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
    
  </section>

  <section id="categories">
    <div class="container my-3 py-5">
      <div class="row my-5">
        
      <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                 
                    <th class="footer-heading mb-3">PRODUCTS</th>
                    <th class="footer-heading mb-3"> PRICES</th>
                    <th class="footer-heading mb-3"> You can delete a product</th>
                   
                   
               


                  </tr>
                  </thead>
                  
              
                  <tbody>
                  
                  <?php
if (!empty($loi)) {
    foreach ($loi as $row) {
?>
    <tr>
      <td> <p class="footer-heading mb-3"><?php echo $row['nom'];?></p></td>
      <td> <p class="footer-heading mb-3"><?php echo $row['price'];?> DT</p></td>
      <td><a href="deletep.php?id=<?php echo $row['idp']; ?>">Delete</a> </td>
     
    </tr>
  <?php } 
  }?>
  <tr> 
   
  <td> <p class="footer-heading mb-3">Total price :  <?php echo $f;?> DT</p></td>
 
</tr>

 
                  </tbody>
                </table>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>


</body></html>