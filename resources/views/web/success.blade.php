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
        
<div class="d-flex justify-content-center">


<div class="card w-75">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Button</a>
    </div>
  </div>


</div>
@include('web.footer')