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
.banner-area{
  height:550px;
}
.cmn-btn {
  /* Add any necessary styles for the container div, if needed */
}

.banner-btn-left {
  display: block; /* Set the link to a block-level element to take full width */
  width: 100%; /* Make the link take up the entire width of the container */
  text-align: center; /* Center the text within the link horizontally */
  /* Add any other styles like font-size, padding, etc. to suit your design */
}
.section-title h3::before{
  content:"";
  width: 50px;
  height:2px;
  background:#fdb819;
  display:inline-block;
  margin: 0 15px 8px 0;

}
.section-title h3::after{
  content:"";
  width: 50px;
  height:2px;
  background:#fdb819;
  display:inline-block;
  margin: 0 0px 8px 15px;

}

.bg-card{
  background-color: black
}
.card {
            height:300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden; 
        }

        .card-img-top {
            width: 100%;
            height: 150px; 
            object-fit: cover; 
        }

        .card-body {
            padding: 10px;
        }

.card-title, .card-text{
  color:#fff;
}
.circle-with-number {
  display: flex;
  align-items: center;
}

.circle {
  width: 30px;
  height: 30px;
  background-color: #fdb819;
  color: #fff;
  border-radius: 50%;
  text-align: center;
  line-height: 30px;
  margin-right: 10px;
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

@include('web.navbar')








{{-- <a href="{{route('form_demande')}}"><button class="btn btn-custom1 me-2" type="button"> Trouver des chargements </button></a> --}}





<div class="banner-area "  style="background-image: url('assets/img/home-one/truck-g9710d026a_1280.jpg');background-size: 100% auto; background-repeat: no-repeat; background-position: center;">

  <div class="d-table">
  <div class="d-table-cell">
  <div class="container">
    <div class="banner-text" style="text-align: center; max-width:100%">
      <h1 style="font-size: 60px">OCL ROUTIER à votre service</h1>
    </div>  
    <div style="width: 75%; height: 75%; background-color: white; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; border-radius: 10px; padding-left:10px;" >
      
      <div>
      <span class="fw-bold text-black" style="font-size: 17px">Expédiez vos marchandises facilement</span>
    </div>
    <div class="top-bar">
      <div class="cmn-btn">
        <a class="banner-btn-left" href="{{route('form_demande')}}">
          Commander un camion

        </a>
          </div>
        </div>
    </div>
    
  </div>
  </div>
  </div>
  </div>
  </div>
  
  <div class="address-area mb-3">
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
    <span>24h/24</span>
    </div>
    </div>
    </div>
    </div>
    </div>
  
    <section class="engineer-area mt-5 mb-5">
      <div class="container">
      <div class="section-title">
      <h3 class="fw-bold">Nos types de camion</h3>
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
      <h3>Fourgon</h3>
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
       
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-6 p-0">
        <div class="feature-img">
        <img src="assets/img/home-one/feature-bg.jpg" alt="Feature">
        </div>
        </div>
        <div class="col-lg-6 p-0">
        <div class="feature-content">
        <h2>Pourquoi OCL routier?</h2>
        <ul>
        <li>
        <i class='bx bx-box'></i>
        <h3>Des transporteurs de confiance</h3>
        <p>OCL Routier met en relation des transporteurs de confiance avec des clients cherchant des solutions de transport routier efficaces et fiables </p>
        </li>
        <li>
        <i class='bx bxs-truck'></i>
        <h3>Service rapide et efficace</h3>
        <p>Offrant un service rapide et efficace pour répondre à vos besoins en transport.</p>
        </li>
        <li>
        <i class='bx bx-money'></i>
        <h3>Des prix très compétitifs</h3>
        <p>Offrant des services de qualité à des prix très compétitifs, notre plateforme s'engage à fournir une solution de transport économique et fiable pour répondre à vos besoins logistiques. </p>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </div>


        <section style="background-color:#fff"class="mt-5 ">
          <div class="container " >
            <div class="section-title mt-5 mb-3 pb-4">
            <h3 class="fw-bold mb-5 ">Comment ça marche?</h3>
            <div class="row">
              <div class="col-8">
                <div class="step-container">
                  <div class="step d-flex">
                    <div class="circle">1</div>
                    <div class="step-content">
                      <h6 class="fw-bold">Connectez-vous à votre compte</h6>
                      <p class="black">Connectez-vous à votre compte utilisateur pour accéder à toutes les fonctionnalités de notre plateforme.</p>
                    </div>
                  </div>
                  <div class="step d-flex">
                    <div class="circle">2</div>
                    <div class="step-content">
                      <h6 class="fw-bold">Remplissez le formulaire de commande</h6>
                      <p class="black">Remplissez le formulaire de commande en fournissant les détails de votre envoi, tels que les adresses de départ et d'arrivée, les dimensions et le poids de la marchandise, etc.</p>
                    </div>
                  </div>
                  <div class="step d-flex">
                    <div class="circle">3</div>
                    <div class="step-content">
                      <h6 class="fw-bold">Obtenez un devis</h6>
                      <p class="black">Une fois le formulaire soumis, vous recevrez rapidement un devis.</p>
                    </div>
                  </div>
                  <div class="step d-flex">
                    <div class="circle">4</div>
                    <div class="step-content">
                      <h6 class="fw-bold">Payer la livraison</h6>
                      <p class="black">Effectuer le paiement relatif à votre livraison sur la plateforme et recever rapidement les informations de votre transporteur.</p>
                    </div>
                  </div>
                </div>
                <div class="cmn-btn">
                  <a class="banner-btn-left mt-3" href="{{route('form_demande')}}">
                    Commandez maintenant
                  </a>
                </div>
            
            
            

              </div>
              <div class="col-4">
                <img src="assets/img/step.png" alt="Feature">

              </div>
            </div>

        </section>


        <section class="mt-5 mb-5">
          <div class="container ">
            <div class="section-title ">
            <h3 class="mb-5 fw-bold">Expédiez toutes sortes de marchandises</h3>
             <div class="row">

              <div class="col-3">
                
                <div class="card bg-card" >
                  <img src="assets/img/alimentaire.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Produit alimentaire</h5>
                    <p class="card-text">féculents, fruit, produit laitiers...</p>
                  </div>
                </div>

              </div>
              <div class="col-3">
                
                <div class="card bg-card" >
                  <img src="assets/img/ciment.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Matériaux de construction</h5>

                    <p class="card-text">Sable, ciment, béton...</p>
                  </div>
                </div>

              </div>
              <div class="col-3">
                
                <div class="card bg-card" >
                  <img src="assets/img/betail.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Animaux</h5>

                    <p class="card-text">Boeuf, mouton, porc...</p>
                  </div>
                </div>

              </div>
              <div class="col-3">
                
                <div class="card bg-card" >
                  <img src="assets/img/gaz.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Produit inflammable</h5>
                    <p class="card-text">Essence, gaz...</p>
                  </div>
                </div>

              </div>

            </div>   

            <div class="row mt-5">

              <div class="col-3">
                
                <div class="card bg-card" >
                  <img src="assets/img/voiture2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Automobile et pièces automobiles </h5>
                    <p class="card-text">voitures, moto...</p>
                  </div>
                </div>

              </div>
              <div class="col-3">
                
                <div class="card bg-card" >
                  <img src="assets/img/frigo.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Meubles et articles ménagers</h5>
                    <p class="card-text">réfrigérateur, gazinière...</p>
                  </div>
                </div>

              </div>
              <div class="col-3 ">
                
                <div class="card bg-card" >
                  <img src="assets/img/carton.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Démenagement</h5>
                    <p class="card-text">Appartement, maison, bureau...</p>
                  </div>
                </div>

              </div>
              <div class="col-3">
                
                <div class="card bg-card" >
                  <img src="assets/img/lourd.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Equipement lourd</h5>

                    <p class="card-text">Agricole, construction...</p>
                  </div>
                </div>

              </div>

            </div>   
              

      </div>
        </section>
 
  






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

  <div class="container">
  <div class="subscribe-area">

  <h4 class="mb-4 fw-bold">Renseignez votre adresse e-mail pour pouvoir suivre notre actualité.</h4>
  <form class="newsletter-form" data-toggle="validator">
  <input type="email" class="form-control" placeholder="Entrez votre email" name="EMAIL" required autocomplete="off">
  <button class="btn subscribe-btn" type="submit">
  Envoyer
  </button>
  <div id="validator-newsletter" class="form-result"></div>
  </form>
  </div>
@include('web.footer')