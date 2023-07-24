@include('web.header')
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

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
   .custom-button {
  border: 2px solid #fdb819;
  background-color: white;
  color: black;
  padding: 10px 20px;
  transition: background-color 0.3s ease-in-out;
}

.custom-button:hover {
  background-color: black;
  color: white;
}
.color{
  color: #fdb819
}
.montant {
  display: flex;
  align-items: center;
}

.titre {
  margin-right: 10px;
}

.valeur {
  font-weight: bold;
}


   
   </style>
   
   
   
   
   </head>

    <body class="d-flex flex-column min-vh-100 bg-light mt-5" >
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
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
            <a href="{{route('about_page')}}" class="nav-link">A propos</a>
        </li> 
        
        </ul>
        </div>
        
        <a href="{{route('form_demande')}}"><button class="btn btn-custom1 me-2" type="button"> Trouver des chargements </button></a>
        <a href="{{route('connexion_page')}}"><button class="btn btn-custom2" type="button">Se connecter</button></a>
        
        
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
        
        <div class="card mt-5 mb-5">
            <div class="card-body">
                <div class="row">
                    <div class="col 3">
                        <h6>Votre envoie</h6>
                        {{ session('form_data')['typeMarchandise']}}

                    </div>

                    <div class="col 3">
                        <h6>Enlèvement</h6>
                        {{ session('form_data')['dateEnlevement']}}
                         <br>
                         {{ session('form_data')['villeEnlevement']}}


                    </div>
                    <div class="col 3">
                        <h6>Livraison</h6>
                        {{ session('form_data')['dateLivraison']}}
                        <br>
                        {{ session('form_data')['villeLivraison']}}


                    </div>

                    <div class="col 2">
                        <h6>Type de camion</h6>
                        {{ session('typeCamionNom')}}

                     
                    </div>

                    <div class="col 1">
                        <a href="{{route('back_commande')}}"><button class="custom-button">Modifier la commande</button></a>

                    </div>
                        

                </div>


            </div>
          </div>

          <div class="card">
            <h5 class="card-header">Votre devis</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title color">Informations client</h5>
                      <p class="card-text">
                        
                        {{ session('user.name') }} <br>
                    email: christelle@gmail.com<br>
                    numéro: 0103980379<br>
                </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title color">Informations expédition </h5>
                      <p class="card-text">
                        <div class="row">
                            <div class="col-6">
                                Lieu enlèvement:{{ session('form_data')['villeEnlevement']}}
                                <br>
                                Date enlèvement: {{ session('form_data')['dateEnlevement']}}
 
                            </div>
                            <div class="col-6">
                                Lieu livraison:{{ session('form_data')['villeLivraison']}} <br>
                                Date livraison:{{ session('form_data')['dateLivraison']}}
                            </div>
                        </div>
                    

                   
                    </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title color">Informations marchandise</h5>
                      <p class="card-text">{{ session('form_data')['typeMarchandise']}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title color">Paiement</h5>
                      <div class="montant">
                        <span class="titre">Montant:</span>
                        <span class="valeur">250.000f</span>
                      </div>
                    <p class="card-text " style="color:red; font-size:12px">Réglez le paiement avant le commencement de la course.Nous n'acceptons que les francs CFA</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-center mt-4">
                <div class="cmn-btn " >
                  <a class="banner-btn-left" id="btnCommander" href="{{route('envoi_demande')}}"  onclick="afficherCard(event)">
                       Commander
                  </a>
                </div>
              </div>
            </div>
          </div>
        
     

         
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" >
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Commande enregistrée</h5>
                </div>
                <div class="modal-body " style="text-align: center">
  
                  Votre commande a été enregistrée avec succès!
                  <p>Nous  vous appelerons dans l'heure pour confirmer</p>
              
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                  <button type="button" class="btn " style="background-color:#fdb819;color:#fff">Obtenir un autre devis</button>
                </div>
              </div>
            </div>
          </div>


@include('web.footer')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var btnCommander = document.getElementById('btnCommander');
    var url = "{{ route('envoi_demande') }}";
    
    btnCommander.addEventListener('click', function(event) {
        event.preventDefault(); // Empêcher le rechargement de la page
        
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data.success) {
                // Succès : afficher le message de succès sur la même page
                var modal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
                modal.show();
                
                // Réinitialiser le formulaire ou effectuer d'autres actions
            } else {
                // Erreur : afficher le message d'erreur sur la même page
                alert(data.message);
            }
        })
        .catch(function() {
            // Erreur de requête AJAX : afficher un message d'erreur générique
            alert('Une erreur s\'est produite lors de l\'envoi de la demande.');
        });
    });
});


</script>