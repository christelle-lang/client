<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/audeck/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:26:59 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/theme-dark.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="{{asset('assets/css/accueil.css')}}">


<title>Audeck - Auto Servicing Bootstrap 5 Template</title>
<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
</head>


<body class="d-flex flex-column min-vh-100 bg-light mt-5" >

  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
{{-- {{dd($camions_selected)}} --}}

{{-- {{dd($villeRegion)}} 
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
--}}

{{-- <div class="d-flex ">
  <div>
  <form id="searchForm">
      @csrf
     
  
      <select  id="selectRegion" name="query" class="form-select regionForm form-select-lg mb-3" aria-label=".form-select-lg example">
          @foreach ($regions as $region)
              <option value="{{ $region->id }}">{{ $region->name }}</option>
          @endforeach
     </select>
    </form>
 
    <select id="selectCity" class="mt-4 form-select form-select-lg mb-3" aria-label=".form-select-lg example">
      <option selected disabled>Ville</option>
    </select>
 
    <ul id="results"></ul>
 --}}





  {{-- <form id="searchForm">
      @csrf
     
  
      <select  id="selectRegion" name="query" class="form-select regionForm form-select-lg mb-3" aria-label=".form-select-lg example">
          @foreach ($regions as $region)
              <option value="{{ $region->id }}">{{ $region->name }}</option>
          @endforeach
     </select>
    </form>
 
    <select id="selectCity" class="mt-4 form-select form-select-lg mb-3" aria-label=".form-select-lg example">
      <option selected disabled>Ville</option>
    </select>
 
    <ul id="results"></ul>
        </div>
      </div> --}}


      {{--       
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected>Ville</option>
        @foreach ($regions as $region)
          <option value="{{ $region->name }}">{{ $region->name }}</option>
        @endforeach
      </select> --}}
      
      
     {{-- 
      <div class="cmn-btn d-flex justify-content-center mb-3">
    <a class="banner-btn-left" href="#" onclick="event.preventDefault(); document.getElementById('searchForm').submit();">Envoyer</a></button>

      </div> --}}



<div class="navbar-area fixed-top">

<div class="mobile-nav">
<a href="index.html" class="logo">
<img src="{{asset('assets/img/logo.png')}}" alt="Logo">
</a>
</div>

<div class="main-nav">
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.html">
<img src="{{asset('assets/img/logo.png')}}" width="120px" class="logo-one" alt="Logo">
</a>

<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

<ul class="navbar-nav ml-auto">
<li class="nav-item">
  <a href="{{route('accueil_page')}}" class="nav-link ">Accueil</a>
</li>   
 <li class="nav-item">
<a href="#" class="nav-link dropdown-toggle ">Camion</a>
<ul class="dropdown-menu">
  @foreach ($types as $type)
    <li class="nav-item">
      <form id="setTypeForm_{{ $type->id }}" method="post" action="{{ route('search') }}">
        @csrf
        <input type="hidden" name="type_id" value="{{ $type->id }}">
        <a href="#" onclick="event.preventDefault(); document.getElementById('setTypeForm_{{ $type->id }}').submit();" class="nav-link">{{ $type->nameCamion }}</a>
      </form>
    </li>
  @endforeach
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


@if(auth()->check()) {{-- Vérifier si le client est connecté --}}
    <button class="btn btn-sm dropdown-toggle" style="color:#fdb819; font-size:18px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-user"></i>
        Bienvenue, {{ session('name') }}
    </button>
    <ul class="dropdown-menu">
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <div class="card-body">
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
                </div>
            </ul>
        </div>
    </ul>
@else
    <div class="cmn-btn">
        <a class="banner-btn-left" href="{{route('connexion_page')}}" onclick="afficherCard(event)">
            <i class='bx bxs-user-plus'></i> Connexion
        </a>
    </div>
@endif


<div  style="margin-left:15px;color:black">
<a class="" href="{{route('shop_panier_page')}}" style="color:black">
    <i  class="fa-solid fa-cart-shopping icon text "> <span style="font-family: poppins,sans-serif;font-weight:normal"> Panier </span></i>
</a>
 
</div>
</nav>
</div>
</div>
</div>






<section class="work-area pt-100 pb-70">
  <div class="row mt-4">
    <div class="col-md-3">
      <form id="searchForm">
        <div class="card bg-dark">
          <div class="card-body">
            <p class="mt-3" style="font-size:20px; color:white; font-weight:bold">LIEU D'ENLEVEMENT</p>
            @csrf
            <select id="selectRegion" name="query" class="form-select regionForm form-select-lg mb-3" aria-label=".form-select-lg example">
              @foreach ($regions as $region)
              <option value="{{ $region->id }}">{{ $region->name }}</option>
              @endforeach
            </select>
            <select id="selectCity" class="mt-4 form-select form-select-lg mb-3" aria-label=".form-select-lg example">
              <option selected disabled>Ville</option>
            </select>
            <ul id="results"></ul>
          </div>
          <div class="card-body">
            <p class="mt-0" style="font-size:20px; color:white; font-weight:bold">TYPE CAMION</p>
            <div class="list-group">
              @foreach ($types as $type)
              <div class="list-group-item">
                <div class="form-check">
                  <input class="form-check-input  regionForm" type="checkbox" id="option1" name="typeCamion[]" value="{{ $type->id }}" {{ in_array($type->id, $selectedTypes) ? 'checked' : '' }}>
                  <label class="form-check-label " for="option{{ $type->id }}">{{ $type->nameCamion }}</a></label>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="card-body">
            <p class="mt-0" style="font-size:20px; color:white; font-weight:bold">CAPACITE DE CHARGE</p>
            <div class="mb-3 d-flex">
              <input type="number" class="form-control me-2" id="minCapacity" name="minCapacity" placeholder="Capacité minimale" value="">
              <hr class="flex-grow-1 my-auto">
              <input type="number" class="form-control ms-2" id="maxCapacity" name="maxCapacity" placeholder="Capacité maximale" value="">
            </div>
          </div>
          <div class="card-body">
            <p class="mt-0" style="font-size:20px; color:white; font-weight:bold">DATE D'ENLEVEMENT</p>
            <div class="input-group">
              <input type="date" class="form-control" id="dateEnlevement"   name="date"  value="" onchange="formatDate(event)">
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-9">
      <div class="row" id="camionsContainer">
        <!-- Camions will be displayed here -->
      </div>
    </div>
  </div>
</section>

<div id="photoContainer" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- Les images des camions seront ajoutées ici -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#photoContainer" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#photoContainer" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


          
                  @foreach($camions_selected as $index => $camion)
                         
                  
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
                              <h3>{{ $camion->nameCamion }}</h3>
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
</div>

  
  
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
      <form action="{{route('envoi_demande')}}" method="post">
        @csrf
        <fieldset>
          <legend >Informations marchandise</legend><hr>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Type de marchandise:</label>
                <input type="text" class="form-control" name="type">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Nombre :</label>
                <input type="text" class="form-control" name="nombre" >
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
                <input type="text" class="form-control" name="lieuEnlevement">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Date d'enlèvement:</label>
                <input type="date" class="form-control" name="dateEnlevement" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Lieu de livraison:</label>
                <input type="text" class="form-control" name="lieuExpedition">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Date voulue de livraison:</label>
                <input type="date" class="form-control" name="dateExpedition" value="22/05/2023">
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
                <input type="text" class="form-control" name="nom_desti">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Numéro du destinataire:</label>
                <input type="text" class="form-control" name="number_desti" >
              </div>
            </div>
          </div>
          <input type="hidden" name="client_id" value="{{ auth()->user()->id }}">
          <input type="hidden" name="camion_id" id="camionIdInput" value="">

          
        </fieldset>
        <div class="modal-footer">
          <div class="cmn-btn d-flex justify-content-center mt-4">
            <button type="submit"> <a     class="banner-btn-left text">Commander</a> </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
  




<footer class="footer-area-two pt-100">
<div class="footer-img">
<img src="{{asset('assets/img/home-one/footer-car.png')}}" alt="Footer">
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


<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>

<script src="{{asset('assets/js/jquery.mixitup.min.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('assets/js/form-validator.min.js')}}"></script>

<script src="{{asset('assets/js/contact-form-script.js')}}"></script>

<script src="{{asset('assets/js/wow.min.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}




<script>
  
// function submitForm() {
//             var formData = new FormData(document.getElementById("searchForm"));
//             var capaciteMin = formData.get("capacite_min");
//             var capaciteMin = formData.get("capacite_max");
            


//             fetch("{{ route('search') }}", {
//                 method: "POST",
//                 body: capaciteMin
//             })
//             .then(function(response) {
//                 // Traiter la réponse du contrôleur
//                 return response.json();
//             })
//             .then(function(data) {
//                 // Traiter les données de la réponse
//                 // ...

//                 // Exemple d'affichage des résultats dans une liste
//                 var resultsList = document.getElementById("resultsList");
//                 resultsList.innerHTML = "";
//                 data.forEach(function(truck) {
//                     var listItem = document.createElement("li");
//                     listItem.textContent = truck.name;
//                     resultsList.appendChild(listItem);
//                 });
//             })
//             .catch(function(error) {
//                 console.log(error);
//                 // Gérer l'erreur d'une manière appropriée (affichage d'un message, etc.)
//                 // ...
//             });
//         }

</script>

<script>

const dateInput = document.getElementById('dateEnlevement');
dateInput.addEventListener('change', formatDate);


function formatDate(event) {
  const dateInput = event.target;
  const selectedDate = new Date(dateInput.value);
  const formattedDate = selectedDate.toISOString().split('T')[0];
  dateInput.value = formattedDate;
  sendFormData();
}


const searchUrl = "{{ route('recherche') }}";
const form = document.getElementById('searchForm');
const minCapacity = document.getElementById('minCapacity');
const resultsContainer = document.getElementById('results');
const maxCapacity = document.getElementById('maxCapacity');
// const dateEnlevement = document.getElementById('dateEnlevement');

minCapacity.addEventListener('change', sendFormData);
maxCapacity.addEventListener('change', sendFormData);
// dateEnlevement.addEventListener('change', sendFormData);

const checkboxTypeCamion = document.querySelectorAll('.form-check-input');

// Ajouter un écouteur d'événement à chaque case à cocher
checkboxTypeCamion.forEach(checkbox => {
  checkbox.addEventListener('change', sendFormData);
});

function sendFormData() {
  event.preventDefault(); // Empêche le rechargement de la page lors de la soumission du formulaire

  const formData = new FormData(form);

  fetch(searchUrl, {
    method: 'POST',
    body: formData
  })
    .then(response => {
      if (response.ok) {
        return response.json();
      } else {
        throw new Error('Erreur lors de la requête.');
      }
    })
    .then(data => {
      const villesData = data[0];
      const camionsData = data[1];

      displayCamions(camionsData);
      displayResults(villesData);
    })
    .catch(error => {
      console.log(error);
    });
}

function displayResults(data) {
  resultsContainer.innerHTML = '';

  const selectCity = document.getElementById('selectCity');
  selectCity.innerHTML = '<option selected disabled>Ville</option>';

  if (data.length === 0) {
    selectCity.innerHTML = '<option selected disabled> aucune Ville</option>';
  } else {
    data.forEach(result => {
      const option = document.createElement('option');
      option.textContent = result;
      selectCity.appendChild(option);
    });
  }
}

function displayCamions(data) {
  const camionsContainer = document.getElementById('camionsContainer');
  camionsContainer.innerHTML = '';

  data.forEach(camion => {
    const div = document.createElement('div');
    div.classList.add('col-sm-6', 'col-lg-3', 'mix', 'ui');
    div.innerHTML = `
      <div class="parts-item " data-camion-id="${camion.id}">
        <div class="parts-top">
          <a href="http://127.0.0.1:8000/shop"> 
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                ${getCarouselItems(camion.photoCamion)}
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </a>
        </div>
        <h3>${camion.nameCamion}</h3>
        <span>${camion.capaciteDeCharge} kg</span>
        <div class="cmn-btn">
          <a class="banner-btn-left" href="#">
            <i class="fa-sharp fa-solid fa-cart-shopping"></i>      
          </a>
          <a class="banner-btn-left" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            <i class="fa-solid fa-eye"></i>
          </a>
        </div>
      </div>
    `;
    div.querySelector('.parts-item').addEventListener('click', function() {
       
      setCamionId(camion.id);
    });
      
    camionsContainer.appendChild(div);
  });
}

function getCarouselItems(photos) {
  const photosArray = JSON.parse(photos);

  let carouselItems = '';

  photosArray.forEach((photo, index) => {
    const activeClass = index === 0 ? 'active' : '';
    carouselItems += `
      <div class="carousel-item ${activeClass}">
        <img src="${photo}" alt="Image">
      </div>
    `;
  });

  return carouselItems;
}


function setCamionId(camionId) {
  const camionIdInput = document.getElementById('camionIdInput');
  camionIdInput.value = camionId;
}

</script>




<script>



        
 // document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
           

         
  //       checkbox.addEventListener('change', function() {
  //         // alert('yh');
  //           document.getElementById('searchForm').submit();
  //       });
  //   });


  

//     document.querySelectorAll('#selectRegion, #selectCity, #nb1, #nb2, #date-input').forEach(function(element) {

//     element.addEventListener('change', function() {
//         document.getElementById('searchForm').submit();
//     });
// });
    
//     document.getElementById('selectRegion').addEventListener('change', function() {

// document.getElementById('regionForm').submit();
// });
// document.getElementById('selectRegion').addEventListener('change', function() {
//     var selectedOption = this.options[this.selectedIndex];
//     var selectedRegion = selectedOption.text;
//     document.getElementById('selectedRegion').textContent = selectedRegion;
// });







  // $('#selectRegion').on('change',function (event) {
  //   event.preventDefault();
  //   var test = 'test';
  //   alert(test);
  // });


  
  // $('.regionForm').on('change', function(event) {
  //   event.preventDefault(); // Empêcher le rechargement de la page
  //   var csrfToken = $('meta[name="csrf-token"]').attr('content');

  //   var regionId = $('#selectRegion').val(); // Récupérer l'ID de la région sélectionnée
  //   var typeCamion = [];

  //   // Récupérer les cases à cocher cochées
  //   $('input[name="typeCamion[]"]:checked').each(function() {
  //     typeCamion.push($(this).val());
  //   });

    // Effectuer une requête AJAX pour envoyer les données au contrôleur
  

</script>

</body>

<!-- Mirrored from templates.hibootstrap.com/audeck/default/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:28:28 GMT -->
</html>



