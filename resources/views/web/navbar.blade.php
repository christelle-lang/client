

<div class="navbar-area fixed-top">

    <div class="mobile-nav">
    <a href="index.html" class="logo">
    <img src="assets/img/ocl_logo.png" alt="Logo">
    </a>
    </div>
    
    <div class="main-nav">
    <div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" href="index.html">
    <img src="assets/img/ocl_logo.png" width="70px" class="logo-one" alt="Logo">
    </a>
    
    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
    
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="{{route('accueil_page')}}" class="nav-link ">Accueil</a>
    </li>   
    
    <li class="nav-item">
      <a href="{{route('contact_page')}}" class="nav-link">Contact</a>
      </li> 
    
    </ul>
    </div>
    <div class="cmn-btn" >
      <a class="banner-btn-left" href="{{route('form_demande')}}" style="padding:10px 0px" >
        Commander un camion
      </a>
    </div>


    
    @auth
    <div class="dropdown">
      <button class="btn btn-custom2 dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
        Bienvenue,{{ Auth::user()->name }}
      </button>
      <ul class="dropdown-menu" aria-labelledby="userMenu">
          <!-- Contenu du menu déroulant (options, liens, etc.) -->
          <li><a class="dropdown-item" href="{{route('dashboard_view')}}">Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <form action="{{ route('deconnexion_client') }}" method="post">
            @csrf <!-- Ajoutez le jeton CSRF pour la sécurité -->
            <li>
                <button type="submit" class="dropdown-item" style="color:#fdb819; background: none; border: none;">Déconnexion</button>
            </li>
        </form>
      </ul>
  </div>
   

    @else
    <form action="{{route('connexion_page')}}" method="get">
      <button type="submit" class="btn btn-custom2" type="button">Se connecter</button>
      
    </form>
@endauth 
    </div>
    </nav>
    </div>
    </div>
    </div>