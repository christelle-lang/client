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
<a href="{{route('fourgon_page')}}" class="nav-link ">Fourgon</a>
</li>
<li class="nav-item">
<a href="{{route('shop_page')}}" class="nav-link active">Sémi-remorque</a>
</li>
<li class="nav-item">
<a href="{{route('shop_page')}}" class="nav-link">Benne</a>
</li>
<li class="nav-item">
  <a href="{{route('shop_page')}}" class="nav-link">Plateau</a>
</li>
<li class="nav-item">
  <a href="{{route('shop_page')}}" class="nav-link">Citerne</a>
</li>
<li class="nav-item">
  <a href="{{route('shop_page')}}" class="nav-link">Frigorifique</a>
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
              <input class="form-check-input" type="checkbox" id="option1" >
              <label class="form-check-label" for="option1"> <a href="{{route('fourgon_page')}}"> Fourgon </a></label>
            </div>
          </div>
          <div class="list-group-item">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="option2" checked>
              <label class="form-check-label" for="option2">  Sémi-remorque </label>
            </div>
          </div>
          <div class="list-group-item">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="option3">
              <label class="form-check-label" for="option3"> <a href="#"> Benne </a></label>
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
    @foreach($camionsFourgon as $index => $camion)
        <div class="col-sm-6 col-lg-3 mix ui">
            <div class="parts-item">
                <div class="parts-top">
                    <a href="{{ route('shop_page') }}"> 
                        <div id="carouselExampleIndicators{{ $index }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach(json_decode($camion->photoCamion) as $imgIndex => $img)
                                    <div class="carousel-item {{ $imgIndex === 0 ? 'active' : '' }}">
                                        <img src="{{ asset($img) }}" alt="Parts">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators{{ $index }}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators{{ $index }}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </a>
                </div>
                <h3>Sémi-remorque</h3>
                <span>{{ $camion->capaciteDeCharge }} kg</span>
                <div class="cmn-btn">
                    <a class="banner-btn-left" href="#">
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>      
                    </a>
                    <a class="banner-btn-left" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                </div>
            </div>
        </div>
 
@endforeach

   
      </div>
   
    </div>
    </section>
  
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Informations camion</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="get">
          @csrf
            <div class="d-flex justify-content-center">
            <div class="card mb-3" style="max-width: 540px; height=300px ">
              <div class="row g-0">
                <div class="col-md-4">
                  <img style="height: -webkit-fill-available;object-fit: scale-down;" src="{{asset('assets/img/camion1.jpg')}}" class="img-fluid rounded-start" alt="crcri">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="container px-4">
                      <div class="row gx-5">
                         <div class="p-3 border bg-light text">Sémi remorque</div>
                      
                      </div>
                      <div class="row gx-5 mt-3">
                         <div class="p-3 border bg-light text">12kg</div>
                      
                      </div>
                      <div class="row gx-5 mt-3">
                        <div class="p-3 border bg-light text">AB0789</div>
                     
                     </div>
                    
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="cmn-btn d-flex justify-content-center mt-4">
              <a class="banner-btn-left text" data-bs-toggle="modal" data-bs-target="#boutonCommander" >Commander</a>
              <a class="banner-btn-left text">Ajouter au panier</a>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="boutonCommander" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Commande</h5>
      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="" method="get">
        @csrf
        <fieldset>
          <legend >Informations marchandise</legend><hr>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Type de marchandise:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Nombre :</label>
                <input type="text" class="form-control" name="dateEnelevemen" >
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend class="mt-3">Informations livraison</legend><hr>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Lieu d'enlèvement:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Date d'enlèvement:</label>
                <input type="date" class="form-control" name="nombre" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Lieu de livraison:</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Date voulue de livraison:</label>
                <input type="date" class="form-control" name="dateEnelevemen" value="22/05/2023">
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend class="mt-3">Informations destinataire</legend><hr>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Nom du destinataire:</label>
                <input type="text" class="form-control" >
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Numéro du destinataire:</label>
                <input type="text" class="form-control" name="dateEnelevemen" >
              </div>
            </div>
          </div>
          
        </fieldset>
        <div class="modal-footer">
          <div class="cmn-btn d-flex justify-content-center mt-4">
            <a class="banner-btn-left text">Commander</a>
          </div>
        </div>
      </form>
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