<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/audeck/default/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:28:33 GMT -->
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="assets/css/theme-dark.css">
<title>Audeck - Auto Servicing Bootstrap 5 Template</title>
<link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<style>
  .titre_form{
    text-align:center;
    font-weight: bold;
    margin-bottom: 40px;
  }
  .text{
    font-size:60px
  }
  ::placeholder{
    font-size: 16px;
    color: rgb(192, 192, 192)
  }
</style>


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
        <button class="btn btn-outline-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
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

<div class="login-area ptb-100">
<div class="container">
<div class="login-item">
<form>
  <h3 class="titre_form">INSCRIPTION  </h3>
<div class="form-group">
<input type="text" class="form-control" placeholder="Nom et prénoms" >
</div>
<div class="form-group">
  <input type="email" class="form-control" placeholder="Email" >
</div>
<div class="form-group">
  <input type="text" class="form-control" placeholder="Téléphone" >
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Mot de passe" >
</div>
</form>
<div class="text-center">
<button type="submit" class="btn login-btn " >S'inscrire</button>
</div>
</div>
</div>
</div>




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
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#7d14131b123d1c0819181e16531e1210">
<span class="__cf_email__" data-cfemail="f990979f96b9988c9d9c9a92d79a9694">[email&#160;protected]</span>
</a>
</li>
<li>
<i class='bx bx-mail-send'></i>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#1078757c7c7f5071657475737b3e737f7d">
<span class="__cf_email__" data-cfemail="c0a8a5acacaf80a1b5a4a5a3abeea3afad">[email&#160;protected]</span>
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

<!-- Mirrored from templates.hibootstrap.com/audeck/default/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:28:33 GMT -->
</html>