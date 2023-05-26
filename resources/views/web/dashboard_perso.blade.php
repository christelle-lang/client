<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/audeck/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:26:59 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">

<link rel="stylesheet" href="assets/css/theme-dark.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="assets/css/accueil.css">


<title>Audeck - Auto Servicing Bootstrap 5 Template</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
<style>
  .nav-link{
    font-size:20px;
  }
    .icon{
        color:black;
    }
    .icon:hover {
      color: #fdb819;
    }
    .custom-search-bar {
      display: flex;
      align-items: center;
    }

    .custom-search-bar .form-control {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
    }

    .custom-search-bar .btn {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }

    
    
    .camion .circle {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background-color: #fdb819;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }
    
    .camion img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      transition: transform 0.3s ease;
    }
    
    .camion img:hover {
      transform: scale(1.1);
    }
    .camion {
      display: inline-block;
      text-align: center;
      margin: 2px;
    }
    .banner {
      background-color: #fdb819;
      padding: 10px;
      text-align: center;
    }
    
    .banner h2 {
      color: white;
      font-size: 25px;
      margin-bottom: 5px;
    }
    .banner h5 {
      color: white;
      font-size: 20px;
      margin-bottom: 5px;
    }
    
    
     .scrollable-container {
      overflow-x: auto; /* Activation de la défilement vertical si nécessaire */
      display: flex
    }
    .scrollable-container::-webkit-scrollbar {
     width: 0;
    }
    .bolder{
      font-weight: bold;
      color:black;
      text-align: center;
    }
    .banner-area{
      height: 700px;
    }
    .text{
      font-size: 18px;
    }
    .list-group-item{
        border:none;
    }

    body {
        min-height: 100vh;
    }

    .footer-container {
        flex-grow: 1;
    }
</style>




  
</head>
<body class="d-flex flex-column min-vh-100 bg-light mt-5" >

<div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="spinner">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>
</div>
</div>
</div>


<div class="navbar-area fixed-top">

<div class="mobile-nav">
<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>
</div>

<div class="main-nav">
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.html">
<img src="assets/img/logo.png" width="120px" class="logo-one" alt="Logo">
</a>

<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

<ul class="navbar-nav ml-auto">

<li class="nav-item">
  <a href="#" class="nav-link ">Accueil</a>
</li>   
 <li class="nav-item">
<a href="#" class="nav-link dropdown-toggle ">Camion</a>
<ul class="dropdown-menu">
<li class="nav-item">
    <a href="#" class="nav-link ">Tout</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link ">Fourgon</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">Sémi-remorque</a>
</li>
<li class="nav-item">
<a href="index-3.html" class="nav-link">Benne</a>
</li>
<li class="nav-item">
  <a href="#" class="nav-link">Plateau</a>
</li>
<li class="nav-item">
  <a href="#" class="nav-link">Citerne</a>
</li>
<li class="nav-item">
  <a href="#" class="nav-link">Frigorifique</a>
</li>
</ul>
</li> 
<li class="nav-item">
<a href="#" class="nav-link">A propos</a>
</li> 
<li class="nav-item">
<a href="#" class="nav-link">Contact</a>
</li> 
</ul>
</div>
<div class="container w-25">
  <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search">
    <button class="btn btn-outline-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
</div>   
<div class="btn-group">

    <button class="btn  btn-sm dropdown-toggle" style="color:#fdb819; font-size:18px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-user"></i>
        Bienvenue,cricri
    </button>
    <ul class="dropdown-menu">
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <div class="card-body ">
                    <div>
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a href="{{route('dashboard_view')}}" class="nav-link"><i class="fa-solid fa-user"></i> Votre compte</a>
                        </li>
                      </ul>
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a href="{{route('reservation_view')}}" class="nav-link"><i class="fa-solid fa-truck"></i> Vos réservations</a>
                        </li>
                      </ul>
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a href="#" class="nav-link "><i class="fa-solid fa-question"></i> Aide</a>
                        </li>
                      </ul>
                     
             </div>
              
            </ul>
        </div>
        
        <div class="card-footer d-flex justify-content-center text">
            <div >
                <button type="button" class="btn btn-light flex-grow-1 text" style="color:#fdb819">Déconnexion</button>
              </div>
        </div>
        
    </ul>

  </div>

 



<div  style="margin-left:15px;color:black">
<a class="" href="{{route('shop_panier_page')}}" style="color:black">
    <i  class="fa-solid fa-cart-shopping icon text "> <span style="font-family: poppins,sans-serif;font-weight:normal"> Panier </span></i>
</a>
 
</div>
</nav>
</div>
</div>
</div>



    
<div class="container mt-5 mb-5 ">
    <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Menu</h4>
            </div>
            <div class="card-body">
              <div class="list-group">
                <a href="{{route('dashboard_view')}}" class="list-group-item list-group-item-action text"><i class="fa-solid fa-user"></i> Compte</a>
                <a href="{{route('reservation_view')}}" class="list-group-item list-group-item-action text"><i class="fa-solid fa-truck"></i> Réservation</a>
                <a href="#" class="list-group-item list-group-item-action text"><i class="fa-solid fa-question"></i> Aide</a>
              </div>
            </div>
            <div class="card-footer">
              <p style="color:#fdb819;text-align:center" class="text ">Déconnexion</p>
            </div>
          </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="card text-center">
                        <div class="card-header ">
                          <h3 class="card-title display-0">Votre compte</h3>
                        </div>
                        <div class="row d-flex justify-content-center mt-3">
                          <div class="col-sm-5">
                        <div class="card" >
                        <div class="card-body">
                          <h4 class="card-title">Informations personnelles</h4>
                          
                          <p class="card-text text" >Kessié</p>
                          <p class="card-text text" >Kessié</p>
                          <p class="card-text text" >Kessié</p>
                        </div>
                      </div>
                     </div>
                     <div class="col-sm-5">
                        <div class="card" >
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="card-link">Card link</a>
                          <a href="#" class="card-link">Another link</a>
                        </div>
                      </div>
                     </div>
                  </div>  
                    
                  <div class="row d-flex justify-content-center mt-3">
                    <div class="col-sm-5">
                  <div class="card" >
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
               </div>
               <div class="col-sm-5">
                  <div class="card" >
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
               </div>
            </div> 
                             
                          
                      </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<footer class="mt-5">


    <div class="row pt-5">
    <div class="col-sm-6 col-lg-3">
    <div class="footer-item">
    <div class="footer-logo">
    <a href="index.html">
    <img src="assets/img/logo-two.png" alt="Logo">
    </a>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam nobis et praesentium architecto ex laudantium voluptates in dolore</p>
    <ul>
    <li>
    <a href="#" target="_blank">
    <i class='bx bxl-youtube'></i>
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class='bx bxl-facebook'></i>
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class='bx bxl-instagram-alt'></i>
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class='bx bxl-twitter'></i>
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3">
    <div class="footer-item">
    <div class="footer-service">
    <h3>Services</h3>
    <ul>
    <li>
    <a href="#" target="_blank">
    <i class='bx bx-chevron-right'></i>
    Automobile
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class='bx bx-chevron-right'></i>
    Tyre Service
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class='bx bx-chevron-right'></i>
    Repair Service
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class='bx bx-chevron-right'></i>
    Engine Service
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
     <i class='bx bx-chevron-right'></i>
    System Service
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3">
    <div class="footer-item">
    <div class="footer-service">
    <h3>Quick Links</h3>
    <ul>
    <li>
    <a href="index.html" target="_blank">
    <i class='bx bx-chevron-right'></i>
    Home
    </a>
    </li>
    <li>
    <a href="about.html" target="_blank">
    <i class='bx bx-chevron-right'></i>
    About Us
    </a>
    </li>
    <li>
    <a href="blog.html" target="_blank">
    <i class='bx bx-chevron-right'></i>
    Blogs
    </a>
    </li>
    <li>
    <a href="engineer.html" target="_blank">
    <i class='bx bx-chevron-right'></i>
    Team
    </a>
    </li>
    <li>
    <a href="testimonial.html" target="_blank">
    <i class='bx bx-chevron-right'></i>
    Testimonials
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3">
    <div class="footer-item">
    <div class="footer-service footer-find">
    <h3>Find Us</h3>
    <ul>
    <li>
    <i class='bx bx-location-plus'></i>
    28/A Street, New York City
    </li>
    <li>
    <i class='bx bx-phone-call'></i>
    <a href="tel:+880123456789">
    +88 0123 456 789
    </a>
    </li>
    <li>
    <i class='bx bx-phone-call'></i>
    <a href="tel:+880563246378">
    +88 0563 246 378
    </a>
    </li>
    <li>
    <i class='bx bx-mail-send'></i>
    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#acc5c2cac3eccdd9c8c9cfc782cfc3c1">
    <span class="__cf_email__" data-cfemail="e78e898188a786928382848cc984888a">[email&#160;protected]</span>
    </a>
    </li>
    <li>
    <i class='bx bx-mail-send'></i>
     <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#82eae7eeeeedc2e3f7e6e7e1e9ace1edef">
    <span class="__cf_email__" data-cfemail="c6aea3aaaaa986a7b3a2a3a5ade8a5a9ab">[email&#160;protected]</span>
    </a>
    
    </li>
    </ul>
    </div>
    </div>
    </div>
    <p style="text-align: center">Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> Audeck. Designed By <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
    
    </div>
    
    
    </div>
    </div>
    </div>
    </div>
    </footer>
    
    <script>
      function recherche() {
        // Obtenir la valeur de recherche à partir de l'entrée utilisateur
        var valeurRecherche = document.getElementById("rechercheInput").value;
    
        // Utiliser la valeur de recherche pour effectuer une action (par exemple, afficher ou traiter les résultats)
        // ...
    
        // Effacer le champ de recherche après la recherche
        document.getElementById("rechercheInput").value = "";
      }
        
      
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
    <script src="assets/js/jquery.meanmenu.js"></script>
    
    <script src="assets/js/jquery.mixitup.min.js"></script>
    
    <script src="assets/js/owl.carousel.min.js"></script>
    
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    
    <script src="assets/js/form-validator.min.js"></script>
    
    <script src="assets/js/contact-form-script.js"></script>
    
    <script src="assets/js/wow.min.js"></script>
    
    <script src="assets/js/custom.js"></script>
    </body>
    
    <!-- Mirrored from templates.hibootstrap.com/audeck/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:27:49 GMT -->
    </html>