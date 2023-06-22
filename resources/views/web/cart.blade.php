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
  :root{
      --jaune: #fdb819;
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
    <a href="{{route('accueil_page')}}" class="nav-link ">Accueil</a>
  </li>   
   <li class="nav-item">
  <a href="{{route('shop_page')}}" class="nav-link dropdown-toggle ">Camion</a>
  <ul class="dropdown-menu">
  <li class="nav-item">
      <a href="{{route('shop_page')}}" class="nav-link ">Tout</a>
  </li>
  <li class="nav-item">
    <a href="{{route('fourgon_page')}}" class="nav-link " >   Fourgon</a>
    </li>
    <li class="nav-item">
    <a href="{{route('semi_remorque_page')}}" class="nav-link">Sémi-remorque</a>
  </li>
  <li class="nav-item">
  <a href="{{route('benne_page')}}" class="nav-link">Benne</a>
  </li>
  <li class="nav-item">
    <a href="{{route('plateau_page')}}" class="nav-link">Plateau</a>
  </li>
  <li class="nav-item">
    <a href="{{route('citerne_page')}}" class="nav-link">Citerne</a>
  </li>
  <li class="nav-item">
    <a href="{{route('frigorifique_page')}}" class="nav-link">Frigorifique</a>
  </li>
  </ul>
  </li> 
  <li class="nav-item">
  <a href="{{route('about_page')}}" class="nav-link">A propos</a>
  </li> 
  <li class="nav-item">
  <a href="{{route('contact_page')}}" class="nav-link">Contact</a>
  </li> 
  </ul>
  </div>
<div class="container w-25">
  <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search">
    <button class="btn btn-outline-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
  </form>
</div>   


<div class="cmn-btn">
  <a class="banner-btn-left" href="sign-in.html" onclick="afficherCard(event)">
    <i class='bx bxs-user-plus'></i> Connexion
  </a>
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

<section class="cart-area ptb-100">

  <div class="container">
    
    <div class="row">
       
      <div class="col-sm-9">
        <div class="card">
          <div class="card-header">
            <h4>Votre panier</h4>
          </div>
          <div class="card-body">
         
<div class="card w-100">
  <div class="card-body">
    <div class="row">
    <div class="col-sm-3">
      <img src="assets/img/home-one/truck-5248809_1280.jpg" alt="">
    </div>
    <div class="col-sm-9">
      <div  style="float:left">
    <h5 class="card-title">Sémi-remorque</h5>
    <p class="card-text">12kg</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Volupta</p>
    <a href="#" class="btn btn-dark">Détail</a>
  </div>
    <div style="float:right">
    <h5 class="card-text" style="color:#fdb819">150 000f</h5>
    <a href="#" class="btn btn-dark" ><i class="fa-solid fa-plus"></i></a>
  </div>
  </div>
  </div>
</div>
</div>
    
<div class="card w-100">
  <div class="card-body">
    <div class="row">
    <div class="col-sm-3">
      <img src="assets/img/home-one/truck-5248809_1280.jpg" alt="">
    </div>
    <div class="col-sm-9">
      <div  style="float:left">
    <h5 class="card-title">Sémi-remorque</h5>
    <p class="card-text">12kg</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Volupta</p>
    <a href="#" class="btn btn-dark">Détail</a>
  </div>
    <div style="float:right">
    <h5 class="card-text" style="color:#fdb819">150 000f</h5>
    <a href="#" class="btn btn-dark" ><i class="fa-solid fa-plus"></i></a>
  </div>
  </div>
  </div>
</div>
</div>
    
<div class="card w-100">
  <div class="card-body">
    <div class="row">
    <div class="col-sm-3">
      <img src="assets/img/home-one/truck-5248809_1280.jpg" alt="">
    </div>
    <div class="col-sm-9">
      <div  style="float:left">
    <h5 class="card-title">Sémi-remorque</h5>
    <p class="card-text">12kg</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Volupta</p>
    <a href="#" class="btn btn-dark">Détail</a>
  </div>
    <div style="float:right">
    <h5 class="card-text" style="color:#fdb819">150 000f</h5>
    <a href="#" class="btn btn-dark" ><i class="fa-solid fa-plus"></i></a>
  </div>
  </div>
  </div>
</div>
</div>
          </div>
        </div>
      </div>
      <div class="col-sm-3 " style="background-color:var(--jaune);">
        <div class="card-header ">
          <h4 class="text-light">Résumé commande</h4>
        </div>
          <div class="card mt-3">
            
            <div class="card-body d-flex justify-content-between ">
              <p class="card-text">Sémi-remorque 12kg (du 14 janvier au 16 janvier)</p>
            
              <button type="button" class="btn-close" data-bs-dismiss="card" aria-label="Fermer"></button>
            
              <p class="position-absolute bottom-0 end-0 fw-bold" >150 000f</p>
            </div>
            
            
            </div>
            <div class="card ">
            
              <div class="card-body d-flex justify-content-between ">
                <p class="card-text">Sémi-remorque 12kg (du 14 janvier au 16 janvier)</p>
              
                <button type="button" class="btn-close" data-bs-dismiss="card" aria-label="Fermer"></button>
              
                <p class="position-absolute bottom-0 end-0 fw-bold" >150 000f</p>
              </div>
              
              
              </div>
            
            
            <div class="card">
              <div class="card-body fw-bold" style="background-color:rgb(247, 247, 247)">
                TOTAL: 150.000f
              </div>
            </div>
            
<div class="cmn-btn d-flex justify-content-center mt-3">
  <a class="banner-btn-left bg-dark " href="#" >
     Valider commande
  </a>
</div>
          </div>
      </div>
    </div>
  </div>
  
</section>

  

  {{-- </div>
<div class="cart-wrap">
<table class="table">
<thead class="thead">
<tr>
<th class="table-head" scope="col">Images</th>
<th class="table-head" scope="col">Caractéristiques</th>
<th class="table-head" scope="col">Prix</th>
<th class="table-head" scope="col">Action</th>

</tr>
</thead>
<tbody>
<tr>
<th class="table-item" scope="row">
<img src="assets/img/home-one/parts/1.png" alt="Parts">
</th>
<td>Audeck Tyre 200</td>
<td>150.00 FCFA</td>
<td>
<div class="d-flex justify-content-around">
<a href="#">
Supprimer 
</a>
<a href="#">
Voir commande
</a>
</div>
</td>
</tr>
<tr>
<th class="table-item" scope="row">
<img src="assets/img/home-one/parts/2.png" alt="Parts">
</th>
<td>Audeck Gear 200</td>
<td>150.00 FCFA</td>
<td>
<div class="d-flex justify-content-around">
<a href="#">
Supprimer 
</a>
<a href="#">
Voir commande
</a>
</div>
</td>
</tr>
<tr>
<th class="table-item" scope="row">
<img src="assets/img/home-one/parts/3.png" alt="Parts">
</th>
<td>Audeck Seat 200</td>
<td>150.00 FCFA</td>
<td>
<div class="d-flex justify-content-around">
<a href="#">
Supprimer 
</a>
<a href="#">
Voir commande
</a>
</div>
</td>
</tr>
<tr>
<th class="table-item" scope="row">
<img src="assets/img/home-one/parts/4.png" alt="Parts">
</th>
<td>Audeck Engine 200</td>
<td>150.00 FCFA</td>
<td>
<div class="d-flex justify-content-around">
<a href="#">
Supprimer 
</a>
<a href="#">
Voir commande
</a>
</div>
</td>
</tr>
</tbody>
</table>

<div class="total-shopping">
<h2>Total </h2>
<h3>Total: <span>150.00 FCFA</span></h3>
<a href="checkout.html">Checkout Items</a>
</div>
</div>
</div>
</section>


<footer class="footer-area-two pt-100">
<div class="footer-img">
<img src="assets/img/home-one/footer-car.png" alt="Footer">
</div>
<div class="container">
<div class="row">
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
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#137a7d757c537266777670783d707c7e">
<span class="__cf_email__" data-cfemail="650c0b030a2504100100060e4b060a08">[email&#160;protected]</span>
</a>
</li>
<li>
<i class='bx bx-mail-send'></i>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#9cf4f9f0f0f3dcfde9f8f9fff7b2fff3f1">
<span class="__cf_email__" data-cfemail="563e333a3a391637233233353d7835393b">[email&#160;protected]</span>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="copyright-area">
<div class="row">
<div class="col-lg-7">
<div class="copyright-item">
<p>Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> Audeck. Designed By <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
</div>
</div>
<div class="col-lg-5">
<div class="copyright-item copyright-right">
<ul>
<li>
<a href="terms-and-conditions.html" target="_blank">Terms & Conditions</a>
</li>
<li>
<span>-</span>
</li>
<li>
<a href="privacy-policy.html" target="_blank">Privacy Policy</a>
</li>
</ul>
</div>
</div> 
</div>
</div>--}}
</div>
</footer>


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

<!-- Mirrored from templates.hibootstrap.com/audeck/default/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:28:29 GMT -->
</html>