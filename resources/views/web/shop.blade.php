<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/audeck/default/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:28:25 GMT -->
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
<title>Audeck - Auto Servicing Bootstrap 5 Template</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>

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
        <button class="btn btn-outline-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>
    </div>     
    <div class="cmn-btn">
      <a class="banner-btn-left" href="sign-in.html" onclick="afficherCard(event)">
        <i class='bx bxs-user-plus'></i> Connexion
      </a>
    </div>
    
    <div class="card border-dark mb-3" style="max-width: 18rem; display: none;" id="card">
      <div class="card-header d-flex justify-content-center"><button type="button" class="btn btn-outline-warning flex-grow-1">Se connecter</button>
      </div>
      <div class="card-body text-primary">
        <div>
        <button type="button" class="btn btn-light flex-grow-1"><i class="fa-solid fa-user"></i> Votre compe</button>
      </div>
      <div class="mt-3">
        <button type="button" class="btn btn-light flex-grow-1"><i class="fa-solid fa-bag-shopping"></i> Vos commandes</button>
      </div>
      </div>
    </div>
    

    <div  style="margin-left:15px">
        <a class="" href="{{route('shop_panier_page')}}">
            <i  class="fa-solid fa-cart-shopping icon " style="font-size:19px"> </i>
            <span style="font-size:16px"> Panier</span>
        </a>
         
        </div>
        </nav>
        </div>
        </div>
        </div>
        


{{-- <div class="page-title-area">
<img src="assets/img/home-one/footer-car.png" alt="Title">
<div class="container">
<div class="page-title-content">
<h2>Shop</h2>
<ul>
<li>
<a href="index.html">Home</a>
</li>
<li>
<i class='bx bx-chevron-right'></i>
</li>
<li>Shop</li>
</ul>
</div>
</div>
</div> --}}


<section class="work-area pt-100 pb-70 ">
  

    <div id="Container" class="row mt-4 ">
      <div class="col-md-3">
  
        <div class="card"style="background-color:white,  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" >
          <div class="container-fluid">
  
          <div class="card-body">
            <p style="font-size:20px; color:white, font-weight:bold">TYPE DU CAMION</p>
            <div class="list-group">
          <div class="list-group-item">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="option1">
              <label class="form-check-label" for="option1">Fourgon</label>
            </div>
          </div>
          <div class="list-group-item">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="option2">
              <label class="form-check-label" for="option2">Sémi-remorque</label>
            </div>
          </div>
          <div class="list-group-item">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="option3">
              <label class="form-check-label" for="option3">Benne</label>
            </div>
          </div>
          <div class="list-group-item">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="option3">
              <label class="form-check-label" for="option3">Plateau</label>
            </div>
          </div>
          <div class="list-group-item">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="option3">
              <label class="form-check-label" for="option3">Citerne</label>
            </div>
          </div>
          <div class="list-group-item">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="option3">
              <label class="form-check-label" for="option3">Frigorifique</label>
            </div>
          </div>
        </div>
  
        <p class="mt-3" style="font-size:20px; color:white, font-weight:bold">CAPACITE DE CHARGE</p>
  
        <div class="d-flex justify-content-between">
          
          <div>
            <input  style="width: 90px; height:40px;  border-radius: 2px;" oninput="calcul()" type="number" name="nb1" id="nb1" value="0">
        </div>
        <div  >
        -
      </div>
        <div>
            <input style="width: 90px; height:40px;border-radius: 2px;"  oninput="calcul()" type="number" name="nb2" id="nb2" value="0">
        </div>
       
    
        <div>
          
        </div>
        
      </div>
  
  
      <p class="mt-3" style="font-size:20px; color:white, font-weight:bold">LIEU D'ENLEVEMENT</p>
  
      <div class="input-group">
        <input type="text" class="form-control" id="inputCity">
        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
      </div>
      <p class="mt-3" style="font-size:20px; color:white, font-weight:bold">DATE D'ENLEVEMENT</p>
      <div class="input-group">
  
      <input style="width: 300px; height:40px;" type="date" name="date" id="date-input" value="2023-05-22">
    </div>
        
      </div>
      
  
  
  </div>
  
      </div>
    </div>
  
   
          <div class="col-md-9">
   <div class="row">
    <div class="col-sm-6 col-lg-3 mix ui">
      <div class="parts-item">
      <div class="parts-top">
      <img src="assets/img/camion1.jpg" alt="Parts">
      </div>
      <h3>Sémi-remorque</h3>
      <span>12 kg</span>
      <div class="cmn-btn">
      <a class="banner-btn-left" href="{{route('shop_detail_page')}}">
        Lire plus
      </a>
      </div>
      </div>
      </div>
      <div class="col-sm-6 col-lg-3 mix ux">
      <div class="parts-item">
      <div class="parts-top">
        <img src="assets/img/camion1.jpg" alt="Parts">
      </div>
      <h3>Sémi-remorque</h3>
      <span>12 kg</span>
      <div class="cmn-btn">
      <a class="banner-btn-left" href="{{route('shop_detail_page')}}">
        Lire plus
      </a>
      </div>
      </div>
      </div>
      <div class="col-sm-6 col-lg-3 mix ui">
      <div class="parts-item">
      <div class="parts-top">
        <img src="assets/img/camion1.jpg" alt="Parts">
      </div>
      <h3>Sémi-remorque</h3>
      <span>12 kg</span>
      <div class="cmn-btn">
      <a class="banner-btn-left" href="{{route('shop_detail_page')}}">
        Lire plus
      </a>
      </div>
      </div>
      </div>
      <div class="col-sm-6 col-lg-3 mix ux">
      <div class="parts-item">
      <div class="parts-top">
      <img src="assets/img/camion1.jpg" alt="Parts">
      </div>
      <h3>Sémi-remorque</h3>
      <span>12 kg</span>
      <div class="cmn-btn">
      <a class="banner-btn-left" href="{{route('shop_detail_page')}}">
        Lire plus
      </a>
      </div>
      </div>
      </div>
      <div class="col-sm-6 col-lg-3 mix ux">
      <div class="parts-item">
      <div class="parts-top">
        <img src="assets/img/camion1.jpg" alt="Parts">
      </div>
      <h3>Sémi-remorque</h3>
      <span>12 kg</span>
      <div class="cmn-btn">
      <a class="banner-btn-left" href="{{route('shop_detail_page')}}">
     Lire plus
      </a>
      </div>
      </div>
      </div>
      </div>
   
    </div>
    </section>
  
{{-- <section class="parts-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<h2>Our All Parts</h2>
</div>
<div class="sorting-menu">
<ul>
<li class="filter active" data-filter="all">all</li>
<li class="filter" data-filter=".tyre">wheels</li>
<li class="filter" data-filter=".web">steering</li>
<li class="filter" data-filter=".ui">brakes</li>
<li class="filter" data-filter=".ux">suspention</li>
<li class="filter" data-filter=".branding">tyre</li>
</ul>
</div>
<div id="Container" class="row">
<div class="col-sm-6 col-lg-6 mix ui branding">
<div class="  parts-item">
<div class="parts-top">
<img src="assets/img/camion1.jpg" alt="Parts">
</div>
<p>Type: sémi-remorque</p>
<p>capacité de charge: 12kg</p>
<div class="cmn-btn">
<a class="banner-btn-left" href="cart.html">
Lire plus
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3 mix branding web">
<div class="parts-item">
<div class="parts-top">
<img src="assets/img/home-one/parts/2.png" alt="Parts">
</div>
<h3>Audeck Gear 200</h3>
<span>$110.00</span>
<div class="cmn-btn">
<a class="banner-btn-left" href="cart.html">
Book Now
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3 mix ui">
<div class="parts-item">
<div class="parts-top">
<img src="assets/img/home-one/parts/3.png" alt="Parts">
</div>
<h3>Audeck Seat 200</h3>
 <span>$130.00</span>
<div class="cmn-btn">
<a class="banner-btn-left" href="cart.html">
Book Now
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3 mix ux">
<div class="parts-item">
<div class="parts-top">
<img src="assets/img/home-one/parts/4.png" alt="Parts">
</div>
<h3>Audeck Engine 200</h3>
<span>$150.00</span>
<div class="cmn-btn">
<a class="banner-btn-left" href="cart.html">
Book Now
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3 mix branding">
<div class="parts-item">
<div class="parts-top">
<img src="assets/img/home-one/parts/5.png" alt="Parts">
</div>
<h3>Audeck Meter 200</h3>
<span>$120.00</span>
<div class="cmn-btn">
<a class="banner-btn-left" href="cart.html">
Book Now
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3 mix ui">
<div class="parts-item">
<div class="parts-top">
<img src="assets/img/camion1.jpg" alt="Parts">
</div>
<h3>Audeck Light 200</h3>
<span>$110.00</span>
<div class="cmn-btn">
<a class="banner-btn-left" href="cart.html">
Book Now
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3 mix ux">
<div class="parts-item">
<div class="parts-top">
<img src="assets/img/home-one/parts/7.png" alt="Parts">
</div>
<h3>Audeck Fuel 200</h3>
<span>$130.00</span>
<div class="cmn-btn">
<a class="banner-btn-left" href="cart.html">
Book Now
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3 mix branding">
<div class="parts-item">
<div class="parts-top">
<img src="assets/img/home-one/parts/8.png" alt="Parts">
</div>
<h3>Audeck Belt 200</h3>
<span>$150.00</span>
<div class="cmn-btn">
<a class="banner-btn-left" href="cart.html">
Book Now
</a>
</div>
</div>
</div>
</div>
</div>
</section> --}}


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
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#1f767179705f7e6a7b7a7c74317c7072">
<span class="__cf_email__" data-cfemail="a4cdcac2cbe4c5d1c0c1c7cf8ac7cbc9">[email&#160;protected]</span>
</a>
</li>
<li>
<i class='bx bx-mail-send'></i>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#80e8e5ececefc0e1f5e4e5e3ebaee3efed">
<span class="__cf_email__" data-cfemail="adc5c8c1c1c2edccd8c9c8cec683cec2c0">[email&#160;protected]</span>
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
</div>
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

<!-- Mirrored from templates.hibootstrap.com/audeck/default/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:28:28 GMT -->
</html>