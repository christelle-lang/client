@include('web.header')

<style>
 

 .top-bar {
  background-color: #fff;
  padding: 10px;
  margin-right: 10px;
}

.btn-custom1 {
  background-color: #fdb819;
  color: #ffffff;
}

.btn-custom2 {
  background-color: #ffffff;
  color: #000000;
}

.btn-custom1:hover {
  color: #ffffff;
}

.btn-custom2:hover {
  color: #fdb819;
}
.engineer-item img {
  width: 150px; /* Définir la largeur souhaitée */
  height: 180px; /* Définir la hauteur souhaitée */
}
.black{
  color:#000000
}
.card {
      border-radius: 10px;
    }
.card-header{
  background-color:#fdb819;
   color:#fff
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
 {{-- <li class="nav-item">
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



</li>  --}}
<li class="nav-item">
  <a href="{{route('contact_page')}}" class="nav-link">Contact</a>
  </li> 

</ul>
</div>

<a href="{{route('form_demande')}}"><button class="btn btn-custom1 me-2" type="button"> Trouver des chargements </button></a>
<button class="btn btn-custom2" type="button">Se connecter</button>


{{-- <div class="cmn-btn">
  <a class="banner-btn-left" href="{{route('connexion_page')}}">
    Trouver des chargements
  </a>
</div>
<div class="cmn-btn ">
  <a class="banner-btn-left" href="{{route('connexion_page')}}">
    Connexion
  </a>
</div> --}}

 
</div>
</nav>
</div>
</div>
</div>














<div class="banner-area "  style="background-image: url('assets/img/home-one/truck-g9710d026a_1280.jpg');background-size: 100% auto; background-repeat: no-repeat; background-position: center;">

  <div class="d-table">
  <div class="d-table-cell">
  <div class="container">
    <div class="banner-text" >
      <h1 style="font-size: 30px">OCL ROUTIER à votre service</h1>
    </div>  
    <div style="width: 75%; height: 75%; background-color: white; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; border-radius: 10px; padding-left:10px;" >
      
      <div>
      <span class="fw-bold text-black" style="font-size: 17px">Expédiez vos marchandises facilement</span>
    </div>
    <div class="top-bar">
      <div class="cmn-btn">
        <a class="banner-btn-left" href="{{route('form_demande')}}">
       Trouver des chargements
        </a>
          </div>
        </div>
    </div>
    
  {{-- <div class="cmn-btn">
  <a class="banner-btn-left" href="{{route('about_page')}}#nos_services">
  <i class='bx bx-meteor' ></i>
  Explorer les services
  </a>
  <a class="banner-btn-right" href="tel:+123456789">
  <i class='bx bx-phone-call'></i>
  +225 2722470500
  </a>
  </div> --}}
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
  
    <section class="engineer-area ptb-100">
      <div class="container">
      <div class="section-title">
      <h3 >Nous mettons à votre service une multitude de types de camion</h3>
      </div>
      <div class="engineer-slider owl-theme owl-carousel">
      <div class="engineer-item">
      <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      <div class="engineer-item">
      <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      <div class="engineer-item">
      <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      <div class="engineer-item">
      <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      <div class="engineer-item">
      <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      <div class="engineer-item">
       <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      <div class="engineer-item">
       <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      <div class="engineer-item">
       <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      <div class="engineer-item">
       <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      <div class="engineer-item">
      <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      <div class="engineer-item">
    <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      <div class="engineer-item">
      <img src="assets/img/benne.jpg" alt="Engineer">
      <div class="engineer-bottom">
      <h3>Benne</h3>
      </div>
      </div>
      </div>
      </div>
      </section>
      

      <div class="feature-area mb-5">
        <div class="feature-shape">
        <img src="assets/img/home-one/feature-shape.png" alt="Feature">
        </div>
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-6 p-0">
        <div class="feature-img">
        <img src="assets/img/home-one/feature-bg.jpg" alt="Feature">
        </div>
        </div>
        <div class="col-lg-6 p-0">
        <div class="feature-content">
        <h2>Pourquooi OCL routier?</h2>
        <ul>
        <li>
        <i class='bx bx-box'></i>
        <h3>Des transporteurs de confiance</h3>
        <p>Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet, consectetur </p>
        </li>
        <li>
        <i class='bx bxs-truck'></i>
        <h3>Service rapide et efficqce</h3>
        <p>Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet, consectetur </p>
        </li>
        <li>
        <i class='bx bx-money'></i>
        <h3>Des prix très compétitifs</h3>
        <p>Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet, consectetur </p>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>


        <section style="color:#fff" class="mt-5 ">
          <div class="container ">
            <div class="section-title">
            <h3>Comment ça marche?</h3>

            <div class="row">
              <div class="col-8 d-flex justify-content-center align-items-center">
                <div>
                  <h6 class="fw-bold">Connectez-vous à votre compte</h6>
                  <p class="black">Connectez-vous à votre compte utilisateur pour accéder à toutes les fonctionnalités de notre plateforme.</p>
                  <h6 class="fw-bold">Remplissez le formulaire de commande</h6>
                  <p class="black">Remplissez le formulaire de commande en fournissant les détails de votre envoi, tels que les adresses de départ et d'arrivée, les dimensions et le poids de la marchandise, etc.</p>
                  <h6 class="fw-bold">Obtenez un devis</h6>
                  <p class="black">Une fois le formulaire soumis, vous recevrez rapidement des devis de transporteurs routiers disponibles qui répondent à vos besoins.</p>
                  <h6 class="fw-bold">Commandez</h6>
                  <p class="black">Choisissez le transporteur qui correspond le mieux à vos critères en termes de prix, de délais de livraison et de services, puis confirmez votre commande.</p>
                  <div class="cmn-btn">
                    <a class="banner-btn-left mt-3" href="{{route('form_demande')}}">
                   Commandez maintenant
                    </a>
                  </div>
                </div>
               
                
                

              </div>
              <div class="col-4">
                <img src="assets/img/formulaire.png" alt="Feature">

              </div>
            </div>

        </section>


        <section class="mt-5 mb-5">
          <div class="container ">
            <div class="section-title ">
            <h3 class="mb-4">OCL routier c'est</h3>

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-3">
                <div class="card text-dark bg-light mb-3">
                  <div class="card-header">OCL routier</div>
                  <div class="card-body">
                    <p class="card-text">12 000 transporteurs qualifiés et de confiance</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card text-dark bg-light mb-3">
                  <div class="card-header">OCL routier</div>
                  <div class="card-body">
                    <p class="card-text">6 000 camions de tout type</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card text-dark bg-light mb-3">
                  <div class="card-header">OCL routier</div>
                  <div class="card-body">
                    <p class="card-text">Un service rapide et à moindre coût</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card text-dark bg-light mb-3">
                  <div class="card-header">OCL routier</div>
                  <div class="card-body">
                    <p class="card-text">Des délais de livraison respectés.</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Ajoutez ici votre contenu pour les 4 cartes en bas -->
            <div class="row justify-content-center">
              <div class="col-md-3">
                <div class="card text-dark bg-light mb-3">
                  <div class="card-header">OCL routier</div>
                  <div class="card-body">
                    <p class="card-text">Some quick example text for Card 5.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card text-dark bg-light mb-3">
                  <div class="card-header ">OCL routier</div>
                  <div class="card-body">
                    <p class="card-text">Some quick example text for Card 6.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card text-dark bg-light mb-3">
                  <div class="card-header  ">OCL routier</div>
                  <div class="card-body">
                    <p class="card-text">Some quick example text for Card 7.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card text-dark bg-light mb-3">
                  <div class="card-header card">OCL routier</div>
                  <div class="card-body">
                    <p class="card-text">Some quick example text for Card 8.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </section>
 
  {{-- <section class="pb-70">
    <div class="container">
    <div class="section-title">
    <span class="sub-title" > camion</span>
    </div>
    <div class="row">
    <div class="col-sm-6 col-lg-4">
    <a href="service-details.html">
    <div class="service-item">
    <div class="service-img">
    <img src="assets/img/home-one/service/1.jpg" alt="Service">
    </div>
    <div class="service-content">
    <i class='bx bx-car'></i>
    <i class='bx bx-car service-icon'></i>
    <h3>Tyre Service</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-sm-6 col-lg-4">
    <a href="service-details.html">
    <div class="service-item">
    <div class="service-img">
    <img src="assets/img/home-one/service/2.jpg" alt="Service">
    </div>
    <div class="service-content">
    <i class='bx bxs-wrench'></i>
    <i class='bx bxs-wrench service-icon'></i>
    <h3>Engine Service</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-sm-6 col-lg-4">
    <a href="service-details.html">
    <div class="service-item">
    <div class="service-img">
    <img src="assets/img/home-one/service/3.jpg" alt="Service">
    </div>
    <div class="service-content">
    <i class='bx bxs-car-garage'></i>
    <i class='bx bxs-car-garage service-icon'></i>
    <h3>Tuning Service</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-sm-6 col-lg-4">
    <a href="service-details.html">
    <div class="service-item">
    <div class="service-img">
    <img src="assets/img/home-one/service/4.jpg" alt="Service">
    </div>
    <div class="service-content">
    <i class='bx bxs-car-mechanic'></i>
    <i class='bx bxs-car-mechanic service-icon'></i>
    <h3>Motor Service</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-sm-6 col-lg-4">
    <a href="service-details.html">
    <div class="service-item">
    <div class="service-img">
    <img src="assets/img/home-one/service/5.jpg" alt="Service">
    </div>
    <div class="service-content">
    <i class='bx bxs-car-crash'></i>
    <i class='bx bxs-car-crash service-icon'></i>
    <h3>System Service</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
    </div>
    </div>
    </a>
    </div>
    <div class="col-sm-6 col-lg-4">
    <a href="service-details.html">
    <div class="service-item">
    <div class="service-img">
    <img src="assets/img/home-one/service/6.jpg" alt="Service">
    </div>
    <div class="service-content">
    <i class='bx bxs-car-wash'></i>
    <i class='bx bxs-car-wash service-icon'></i>
    <h3>Washing Service</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
    </div>
    </div>
    </a>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="quality-area">
    <div class="quality-img">
    <img src="assets/img/home-one/quality-shape.png" alt="Quality">
    <img src="assets/img/home-one/quality-shape.png" alt="Quality">
    <img src="assets/img/home-one/quality-car.png" alt="Quality">
    </div>
    <div class="container">
    <div class="quality-content">
    <div class="section-title">
    <h2>Quality Work is Our First Priority </h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
    </div>
    <div class="cmn-btn">
    <a class="banner-btn-left" href="about.html">
    Read More
    </a>
    </div>
    <img src="assets/img/home-one/tyre.png" alt="Quality">
    </div>
    </div>
    </section> --}}





  







{{-- 







<section class="process-area pt-100 pb-70">
<div class="process-shape">
<img src="assets/img/home-one/car-shadow.png" alt="Shape">
</div>
<div class="section-title">
<span class="sub-title">process</span>
<h2>Our Working Process</h2>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="process-item">
<div class="process-inner process-one">
<i class='bx bxs-car-mechanic'></i>
<h3>Identify Problems</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
</div>
<div class="process-inner">
<i class='bx bxs-car-garage'></i>
<h3>Start Servicing</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="process-item">
<div class="process-img">
<img src="assets/img/home-one/tyre.png" alt="Process">
</div>
</div>
</div>
<div class="col-lg-4">
<div class="process-item">
<div class="process-inner process-two">
<i class='bx bxs-car-crash'></i>
<h3>Trial For Make Sure</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
</div>
<div class="process-inner process-three">
<i class='bx bxs-car-wash'></i>
<h3>Deliver Service</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="pb-70">
<div class="container">
<div class="section-title">
<span class="sub-title">service</span>
<h2>Our Services</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
<div class="row">
<div class="col-sm-6 col-lg-4">
<a href="service-details.html">
<div class="service-item">
<div class="service-img">
<img src="assets/img/home-one/service/1.jpg" alt="Service">
</div>
<div class="service-content">
<i class='bx bx-car'></i>
<i class='bx bx-car service-icon'></i>
<h3>Tyre Service</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
</div>
</div>
</a>
</div>
<div class="col-sm-6 col-lg-4">
<a href="service-details.html">
<div class="service-item">
<div class="service-img">
<img src="assets/img/home-one/service/2.jpg" alt="Service">
</div>
<div class="service-content">
<i class='bx bxs-wrench'></i>
<i class='bx bxs-wrench service-icon'></i>
<h3>Engine Service</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
</div>
</div>
</a>
</div>
<div class="col-sm-6 col-lg-4">
<a href="service-details.html">
<div class="service-item">
<div class="service-img">
<img src="assets/img/home-one/service/3.jpg" alt="Service">
</div>
<div class="service-content">
<i class='bx bxs-car-garage'></i>
<i class='bx bxs-car-garage service-icon'></i>
<h3>Tuning Service</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
</div>
</div>
</a>
</div>
<div class="col-sm-6 col-lg-4">
<a href="service-details.html">
<div class="service-item">
<div class="service-img">
<img src="assets/img/home-one/service/4.jpg" alt="Service">
</div>
<div class="service-content">
<i class='bx bxs-car-mechanic'></i>
<i class='bx bxs-car-mechanic service-icon'></i>
<h3>Motor Service</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
</div>
</div>
</a>
</div>
<div class="col-sm-6 col-lg-4">
<a href="service-details.html">
<div class="service-item">
<div class="service-img">
<img src="assets/img/home-one/service/5.jpg" alt="Service">
</div>
<div class="service-content">
<i class='bx bxs-car-crash'></i>
<i class='bx bxs-car-crash service-icon'></i>
<h3>System Service</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
</div>
</div>
</a>
</div>
<div class="col-sm-6 col-lg-4">
<a href="service-details.html">
<div class="service-item">
<div class="service-img">
<img src="assets/img/home-one/service/6.jpg" alt="Service">
</div>
<div class="service-content">
<i class='bx bxs-car-wash'></i>
<i class='bx bxs-car-wash service-icon'></i>
<h3>Washing Service</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. </p>
</div>
</div>
</a>
</div>
</div>
</div>
</section>


<section class="quality-area">
<div class="quality-img">
<img src="assets/img/home-one/quality-shape.png" alt="Quality">
<img src="assets/img/home-one/quality-shape.png" alt="Quality">
<img src="assets/img/home-one/quality-car.png" alt="Quality">
</div>
<div class="container">
<div class="quality-content">
<div class="section-title">
<h2>Quality Work is Our First Priority </h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
</div>
<div class="cmn-btn">
<a class="banner-btn-left" href="about.html">
Read More
</a>
</div>
<img src="assets/img/home-one/tyre.png" alt="Quality">
</div>
</div>
</section>





<div class="feature-area">
<div class="feature-shape">
<img src="assets/img/home-one/feature-shape.png" alt="Feature">
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 p-0">
<div class="feature-img">
<img src="assets/img/home-one/feature-bg.jpg" alt="Feature">
</div>
</div>
<div class="col-lg-6 p-0">
<div class="feature-content">
<h2>Our Features</h2>
<ul>
<li>
<i class='bx bx-box'></i>
<h3>Trusted & Quality Work</h3>
<p>Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet, consectetur </p>
</li>
<li>
<i class='bx bxs-truck'></i>
<h3>Fast Service Delivery</h3>
<p>Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet, consectetur </p>
</li>
<li>
<i class='bx bx-money'></i>
<h3>Money Back Garanty</h3>
<p>Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet, consectetur </p>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="parts-area ptb-100">
<div class="container">
<div class="section-title">
<span class="sub-title">parts</span>
<h2>Parts On Sale</h2>
</div>
<div class="row">
<div class="col-sm-6 col-lg-3">
<div class="parts-item">
<div class="parts-top">
<img src="assets/img/home-one/parts/1.png" alt="Parts">
</div>
<h3>Audeck Tyre 200</h3>
<span>$120.00</span>
<div class="cmn-btn">
<a class="banner-btn-left" href="cart.html">
Book Now
</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
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
<div class="col-sm-6 col-lg-3">
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
<div class="col-sm-6 col-lg-3">
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
</div>
<div class="parts-view">
<a href="shop.html">View All</a>
</div>
</div>
</section>


<section class="engineer-area ptb-100">
<div class="container">
<div class="section-title">
<span class="sub-title">engineer</span>
<h2>Meet Our Expert Engineer</h2>
</div>
<div class="engineer-slider owl-theme owl-carousel">
<div class="engineer-item">
<img src="assets/img/home-one/engineer/1.jpg" alt="Engineer">
<div class="engineer-bottom">
<h3>Jerry Hudson</h3>
<span>Machanical Engineer</span>
</div>
</div>
<div class="engineer-item">
<img src="assets/img/home-one/engineer/2.jpg" alt="Engineer">
<div class="engineer-bottom">
<h3>Tom Henry</h3>
<span>System Engineer</span>
</div>
</div>
<div class="engineer-item">
<img src="assets/img/home-one/engineer/3.jpg" alt="Engineer">
<div class="engineer-bottom">
 <h3>Jac Jacson</h3>
<span>Head Engineer</span>
</div>
</div>
<div class="engineer-item">
<img src="assets/img/home-one/engineer/4.jpg" alt="Engineer">
<div class="engineer-bottom">
<h3>Micheal Shon</h3>
<span>Automobile Engineer</span>
</div>
</div>
<div class="engineer-item">
<img src="assets/img/home-one/engineer/1.jpg" alt="Engineer">
<div class="engineer-bottom">
<h3>Jerry Hudson</h3>
<span>Machanical Engineer</span>
</div>
</div>
<div class="engineer-item">
<img src="assets/img/home-one/engineer/2.jpg" alt="Engineer">
<div class="engineer-bottom">
<h3>Tom Henry</h3>
<span>System Engineer</span>
</div>
</div>
<div class="engineer-item">
<img src="assets/img/home-one/engineer/3.jpg" alt="Engineer">
<div class="engineer-bottom">
<h3>Jac Jacson</h3>
<span>Head Engineer</span>
</div>
</div>
<div class="engineer-item">
<img src="assets/img/home-one/engineer/4.jpg" alt="Engineer">
<div class="engineer-bottom">
<h3>Micheal Shon</h3>
<span>Automobile Engineer</span>
</div>
</div>
<div class="engineer-item">
<img src="assets/img/home-one/engineer/1.jpg" alt="Engineer">
<div class="engineer-bottom">
<h3>Jerry Hudson</h3>
<span>Machanical Engineer</span>
</div>
</div>
<div class="engineer-item">
<img src="assets/img/home-one/engineer/2.jpg" alt="Engineer">
<div class="engineer-bottom">
<h3>Tom Henry</h3>
<span>System Engineer</span>
</div>
</div>
<div class="engineer-item">
<img src="assets/img/home-one/engineer/3.jpg" alt="Engineer">
<div class="engineer-bottom">
<h3>Jac Jacson</h3>
<span>Head Engineer</span>
</div>
</div>
<div class="engineer-item">
<img src="assets/img/home-one/engineer/4.jpg" alt="Engineer">
<div class="engineer-bottom">
<h3>Micheal Shon</h3>
<span>Automobile Engineer</span>
</div>
</div>
</div>
</div>
</section>


<div class="review-area">
<div class="review-shape">
<img src="assets/img/home-one/review/review-shape.png" alt="Review">
</div>
<div class="video-wrap">
<a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
<i class='bx bx-play'></i>
</a>
</div>
<div class="container-fluid p-0">
<div class="row m-0">
<div class="col-lg-6 ptb-100">
<div class="review-slider owl-theme owl-carousel">
<div class="review-item">
<i class='bx bxs-quote-right'></i>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
<div class="review-inner">
<img src="assets/img/home-one/review/reviewer-one.png" alt="Review">
<h3>Sarah Tylor</h3>
<span>Designer</span>
</div>
</div>
<div class="review-item">
<i class='bx bxs-quote-right'></i>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
<div class="review-inner">
<img src="assets/img/home-one/review/reviewer-one.png" alt="Review">
<h3>Tom Henry</h3>
<span>CEO</span>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="review-bg">
<img src="assets/img/home-one/review/review-right.jpg" alt="Review">
</div>
</div>
</div>
</div>
</div>


<section class="pricing-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<span class="sub-title">pricing</span>
<h2>Our Pricing Plan</h2>
</div>
<div class="row">
<div class="col-sm-6 col-lg-4">
<div class="pricing-item">
<div class="pricing-top">
<h3>Basic Pack</h3>
<p><span class="dollar">$</span>39<span class="month">/month</span></p>
</div>
<div class="pricing-middle">
<i class='bx bx-rocket'></i>
</div>
<div class="pricing-bottom">
<ul>
<li>
<i class='bx bx-check-circle'></i>
Up to 3 chat operators
</li>
<li>
<i class='bx bx-check-circle'></i>
200 ChatBot Triggers
</li>
<li>
<i class='bx bx-check-circle'></i>
Quick Responses
</li>
<li>
<i class='bx bx-check-circle'></i>
Google Analytics
</li>
<li>
<i class='bx bx-check-circle'></i>
Messenger Integration
</li>
<li>
<i class='bx bx-x'></i>
Email Integration
 </li>
<li>
<i class='bx bx-x'></i>
Mobile + Desktop Apps
</li>
<li>
<i class='bx bx-x'></i>
Drag & Drop Widgets
</li>
</ul>
<div class="cmn-btn">
<a class="banner-btn-left" href="#">
Get Started
</a>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="pricing-item">
<div class="pricing-top">
<h3>Standard Pack</h3>
<p><span class="dollar">$</span>69<span class="month">/month</span></p>
</div>
<div class="pricing-middle">
<i class='bx bx-rocket'></i>
</div>
<div class="pricing-bottom">
<ul>
<li>
<i class='bx bx-check-circle'></i>
Up to 3 chat operators
</li>
<li>
<i class='bx bx-check-circle'></i>
200 ChatBot Triggers
</li>
<li>
<i class='bx bx-check-circle'></i>
Quick Responses
</li>
<li>
<i class='bx bx-check-circle'></i>
Google Analytics
</li>
<li>
<i class='bx bx-check-circle'></i>
Messenger Integration
</li>
<li>
<i class='bx bx-check-circle'></i>
Email Integration
</li>
<li>
<i class='bx bx-x'></i>
Mobile + Desktop Apps
</li>
<li>
<i class='bx bx-x'></i>
Drag & Drop Widgets
</li>
</ul>
<div class="cmn-btn">
<a class="banner-btn-left" href="#">
Get Started
</a>
</div>
</div>
</div>
</div>
<div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
<div class="pricing-item">
<div class="pricing-top">
<h3>Premium Pack</h3>
<p><span class="dollar">$</span>99<span class="month">/month</span></p>
</div>
<div class="pricing-middle">
<i class='bx bx-rocket'></i>
</div>
<div class="pricing-bottom">
<ul>
<li>
<i class='bx bx-check-circle'></i>
Up to 3 chat operators
</li>
<li>
<i class='bx bx-check-circle'></i>
200 ChatBot Triggers
</li>
<li>
<i class='bx bx-check-circle'></i>
Quick Responses
</li>
<li>
<i class='bx bx-check-circle'></i>
Google Analytics
</li>
<li>
<i class='bx bx-check-circle'></i>
Messenger Integration
</li>
<li>
<i class='bx bx-check-circle'></i>
Email Integration
</li>
<li>
<i class='bx bx-check-circle'></i>
Mobile + Desktop Apps
</li>
<li>
<i class='bx bx-check-circle'></i>
Drag & Drop Widgets
</li>
</ul>
<div class="cmn-btn">
<a class="banner-btn-left" href="#">
Get Started
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section> 



  <section class="work-area mt-5 ">
    <div class="container">
    <div class="section-title">
   <span class="sub-title">Camions</span>
  <h2>Latest Works For Clients</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
   {{-- </div> 
    <div class="sorting-menu">
    <ul>
    <li class="filter active" data-filter="all">Tout</li>
    <li class="filter" data-filter=".tyre">Fourgon</li>
    <li class="filter" data-filter=".web">Sémi-remorque</li>
    <li class="filter" data-filter=".ui">Benne</li>
    <li class="filter" data-filter=".ux">Citerne</li>
    <li class="filter" data-filter=".branding">Plateau</li>
    <li class="filter" data-filter=".branding">Frigorifique</li>
  
    </ul>
    </div>
    <div id="Container" class="row">
    <div class="col-sm-6 col-lg-3 mix web ui">
    <div class="work-item">
    <img src="assets/img/home-one/work/1.jpg" alt="Work">
    <div class="cmn-btn">
    <a class="banner-btn-left" href="#">
    Read More
    <i class='bx bx-right-arrow-alt'></i>
    </a>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3 mix tyre ux">
    <div class="work-item">
    <img src="assets/img/home-one/work/2.jpg" alt="Work">
    <div class="cmn-btn">
    <a class="banner-btn-left" href="#">
    Read More
    <i class='bx bx-right-arrow-alt'></i>
    </a>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-6 mix ui branding">
    <div class="work-item">
    <img src="assets/img/home-one/work/3.jpg" alt="Work">
    <div class="cmn-btn">
    <a class="banner-btn-left" href="#">
    Read More
    <i class='bx bx-right-arrow-alt'></i>
    </a>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3 mix ux tyre">
    <div class="work-item">
    <img src="assets/img/home-one/work/4.jpg" alt="Work">
    <div class="cmn-btn">
    <a class="banner-btn-left" href="#">
    Read More
    <i class='bx bx-right-arrow-alt'></i>
    </a>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-6 mix branding ui">
    <div class="work-item">
    <img src="assets/img/home-one/work/5.jpg" alt="Work">
    <div class="cmn-btn">
    <a class="banner-btn-left" href="#">
    Read More
    <i class='bx bx-right-arrow-alt'></i>
    </a>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-3 mix tyre web">
    <div class="work-item">
    <img src="assets/img/home-one/work/6.jpg" alt="Work">
    <div class="cmn-btn">
    <a class="banner-btn-left" href="#">
    Read More
    <i class='bx bx-right-arrow-alt'></i>
    </a>
    </div>
    </div>
    </div> 
    </div>
    </div>
    </section> --}}
  




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

<footer class="mt-5">
  <div class="footer-img">
  <img src="assets/img/home-one/footer-car.png" alt="Footer">
  </div>
  <div class="container">
  <div class="subscribe-area">
  <div class="subscribe-shape">
  <img src="assets/img/home-one/blog-shape.png" alt="Blog">
  </div>
  <h4 class="mb-4">Renseignez votre adresse e-mail pour pouvoir suivre notre actualité.</h4>
  <form class="newsletter-form" data-toggle="validator">
  <input type="email" class="form-control" placeholder="Entrez votre email" name="EMAIL" required autocomplete="off">
  <button class="btn subscribe-btn" type="submit">
  Envoyer
  </button>
  <div id="validator-newsletter" class="form-result"></div>
  </form>
  </div>
@include('web.footer')