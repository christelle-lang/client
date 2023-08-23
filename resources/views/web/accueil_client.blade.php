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
  @php
  $camions = session('camions');
  @endphp



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
          <a href="{{route('accueil_page')}}"  class="nav-link ">Accueil</a>
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
        <a href="{{route('semi_remorque_page')}}" class="nav-link">Sémi-remorque</a>
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
<div class="btn-group">

    <button class="btn  btn-sm dropdown-toggle" style="color:#fdb819; font-size:18px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-user"></i>
        Bienvenue,{{ session('name') }}
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
            
              <form action="{{route('deconnexion_client')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-light flex-grow-1 text" style="color:#fdb819">Déconnexion</button>
              </form>
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
















<div class="banner-area ">
  <div class="banner-img">
  <img src="assets/img/home-one/truck-5248809_1280.jpg" alt="Banner">
  <img class="wow fadeInRightBig" src="assets/img/home-one/truck-5248809_1280.jpg" alt="Banner">
  </div>
  <div class="d-table">
  <div class="d-table-cell">
  <div class="container">
  <div class="banner-text" >
  <h1 style="font-size: 60px">Obtenez des camions pour transporter vos marchandises!</h1>
  <p>Facilitez et sécurisez vos expéditions routières en un clic avec notre plateforme de mise en relation de transporteurs routiers et de clients. </p>
  <div class="cmn-btn">
  <a class="banner-btn-left" href="{{route('about_page')}}#nos_services">
  <i class='bx bx-meteor' ></i>
  Explorer les services
  </a>
  <a class="banner-btn-right" href="tel:+123456789">
  <i class='bx bx-phone-call'></i>
  +225 2722470500
  </a>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  <div class="address-area ">
    <div class="container">
    <div class="row">
    <div class="col-sm-6 col-lg-4">
    <div class="address-item">
    <i class='bx bxs-paper-plane'></i>
    <h3>Localisation</h3>
    <span>Abidjan cocody riviera 2 sogefia, villa 303</span>
    </div>
    </div>
    <div class="col-sm-6 col-lg-4">
    <div class="address-item">
    <i class='bx bxs-phone-call'></i>
    <h3>Appelez-nous</h3>
    <a href="tel:+0755543332322">+225 2722470500</a>
    </div>
    </div>
    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
    <div class="address-item address-one">
    <i class='bx bxs-time-five'></i>
    <h3>Horaires</h3>
    <span>Du lundi au dimanche</span>
    <span>08h00 à 21h00</span>
    </div>
    </div>
    </div>
    </div>
    </div>
  
  

  <div class="banner d-flex justify-content-between mt-5 ">
    <div >
    <h2 style="margin-left:15px">Les types de camions</h2>
   </div>

</div>
    <div class="row mt-4 mb-4">
      <div class="col-sm-2">
        <div class="camion">
          <div class="circle">
            <img src="assets/img/home-one/truck-5248809_1280.jpg" alt="Camion 1">
          </div>
          <div class="parts-top">
          </div>
          <div class="bolder">
          <p>Sémi-remorque</p>
        </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="camion">
          <div class="circle">
            <img src="assets/img/home-one/truck-5248809_1280.jpg" alt="Camion 2">
          </div>
          <div class="bolder">
            <p>Sémi-remorque</p>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="camion">
          <div class="circle">
            <img src="assets/img/home-one/truck-5248809_1280.jpg" alt="Camion 3">
          </div>
          <div class="bolder">
            <p>Sémi-remorque</p>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="camion">
          <div class="circle">
            <img src="assets/img/home-one/truck-5248809_1280.jpg" alt="Camion 3">
          </div>
          <div class="bolder">
            <p>Sémi-remorque</p>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="camion">
          <div class="circle">
            <img src="assets/img/home-one/truck-5248809_1280.jpg" alt="Camion 3">
          </div>
          <div class="bolder">
            <p>Sémi-remorque</p>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="camion">
          <div class="circle">
            <img src="assets/img/home-one/truck-5248809_1280.jpg" alt="Camion 3">
          </div>
          <div class="bolder">
            <p>Sémi-remorque</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  

  <div class="banner d-flex justify-content-between">
    <div >
    <h2 style="margin-left:15px">A la une</h2>
   </div>
  <div class="d-flex align-items-center ">
      <a href="{{route('shop_page')}}" ><h5>  Voir plus </h5></a>
      <i class="fa-solid fa-chevron-right fa-2" style="color:white; margin-left:3px"></i>
    </div>
</div>
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col">
        
      <div class="scrollable-container flex-nowrap">

        @foreach($camions as $index => $camion)
        <div class="col-sm-6 col-lg-3 mix ui">
            <div class="parts-item">
                <div class="parts-top">
                    <a href="{{ route('shop_page') }}"> 
                        <div id="carouselExampleIndicators{{ $index }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach(json_decode($camion->photoCamion) as $imgIndex => $img)
                                    <div class="carousel-item {{ $imgIndex === 0 ? 'active' : '' }}">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{ asset($img) }}" class="card-img-top img-fluid" alt="...">
                                        </div>
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
                <span>{{$camion->capaciteDeCharge}} kg</span>
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
    </div>
       </div>
      </div>
 
    </div>

   
  


   

    

  

  <div class="banner d-flex justify-content-between">
    <div >
    <h2 style="margin-left:15px">Les plus demandés</h2>
   </div>
  <div class="d-flex align-items-center ">
      <a href="{{route('shop_page')}}" ><h5>  Voir plus </h5></a>
      <i class="fa-solid fa-chevron-right fa-2" style="color:white; margin-left:3px"></i>
    </div>
</div>  
  <div class="container-fluid mt-3">
  <div class="row">
    <div class="col">
        
      <div class="scrollable-container flex-nowrap">

        @foreach($camions as $index => $camion)
        <div class="col-sm-6 col-lg-3 mix ui">
            <div class="parts-item">
                <div class="parts-top">
                    <a href="{{ route('shop_page') }}"> 
                        <div id="carouselExampleIndicators{{ $index }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach(json_decode($camion->photoCamion) as $imgIndex => $img)
                                    <div class="carousel-item {{ $imgIndex === 0 ? 'active' : '' }}">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{ asset($img) }}" class="card-img-top img-fluid" alt="...">
                                        </div>
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
                <span>{{$camion->capaciteDeCharge}} kg</span>
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
    </div>
       </div>
      </div>
 
    </div>

   

  
  

    <div class="banner d-flex justify-content-between">
      <div >
      <h2 style="margin-left:15px">Tous les types</h2>
     </div>
    <div class="d-flex align-items-center ">
        <a href="{{route('shop_page')}}" ><h5>  Voir plus </h5></a>
        <i class="fa-solid fa-chevron-right fa-2" style="color:white; margin-left:3px"></i>
      </div>
  </div>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col">
          
        <div class="scrollable-container flex-nowrap">
  
          @foreach($camions as $index => $camion)
          <div class="col-sm-6 col-lg-3 mix ui">
              <div class="parts-item">
                  <div class="parts-top">
                      <a href="{{ route('shop_page') }}"> 
                          <div id="carouselExampleIndicators{{ $index }}" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                  @foreach(json_decode($camion->photoCamion) as $imgIndex => $img)
                                      <div class="carousel-item {{ $imgIndex === 0 ? 'active' : '' }}">
                                          <div class="card" style="width: 18rem;">
                                              <img src="{{ asset($img) }}" class="card-img-top img-fluid" alt="...">
                                          </div>
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
                  <span>{{$camion->capaciteDeCharge}} kg</span>
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
      </div>
         </div>
        </div>
   
      </div>
  
     
         </div>
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

<footer>


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
    function afficherCard() {
    var card = document.getElementById("card");
    card.style.display = "block";
  }
  function afficherCard(event) {
    event.preventDefault(); // Empêche le lien de se comporter comme un lien normal

    var boutonConnexion = event.target; // Élément sur lequel le clic a été effectué (le lien de connexion)
    var card = document.getElementById("card");

    card.style.display = "block";
    card.style.position = "absolute";
    card.style.top = boutonConnexion.offsetTop + boutonConnexion.offsetHeight + "px";
    card.style.left = boutonConnexion.offsetLeft + "px";
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