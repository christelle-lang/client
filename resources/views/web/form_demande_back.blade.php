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
<head>
    <body class="d-flex flex-column min-vh-100 bg-light mt-5" >

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
        <a href="{{route('connexion_page')}}">   <button class="btn btn-custom2" type="button"> Se connecter</button></a>
        
        
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
        
        
        
        
        
        
<style>
   body{
    background-color: #fdb819;

}
.btn-custom1 {
  background-color: #fdb819;
  color: #ffffff;}
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
.color{
  color: #fdb819
}
   

</style>

</head>

<div class="container d-flex align-items-center justify-content-center">
  <div class="form-container" style="width: 75%;">
    <h4 class="card-title text-center mb-3 mt-5">Passez votre commande de camion</h4>
    <form id="search" method="POST" action="{{route('devis')}}">
      @csrf
      <h6 class="category-title color">Informations sur l'enlèvement</h6>

      <div class="row">
        
        <div class="col-md-6 mb-1">
          <label for="regionExpedition ">Région d'enlèvement:</label>
          <select id="selectRegion" name="query" class="form-select regionForm form-select-lg mb-3" aria-label=".form-select-lg example"  value="{{session('form_data')['query']}}">
            @foreach ($regions as $region)
              <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-6 mb-1">
          <label for="villeExpediton">Ville d'enlèvement:</label>

          <select id="selectCity" name="villeEnlevement" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"  value="{{session('form_data')['villeEnlevement']}}">
            <option selected disabled>{{session('form_data')['villeEnlevement']}}</option>
          </select>
          <ul id="results"></ul>
        </div>
      </div>
      <div class="form-group mb-4">
        <label for="dateExpedition">Date voulue d'enlèvement:</label>
        <input type="date" class="form-control" id="dateExpedition" name="dateEnlevement" value="{{session('form_data')['dateEnlevement']}}" >
      </div>

      <h6 class="category-title color ">Informations sur la livraison</h6>

      <div class="row">
        <div class="col-md-6 mb-1">
          <label for="regionLivraison ">Région de livraison:</label>
          <select id="selectRegion2" name="query2" class="form-select regionForm form-select-lg mb-3" aria-label=".form-select-lg example" value={{session('form_data')['query2']}}>
            @foreach ($regions as $region)
              <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-6 mb-1">
          <label for="villeLivraison">Ville de livraison:</label>
          <select id="selectCity2" name="villeLivraison" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"  value="{{session('form_data')['villeLivraison']}}">
            <option selected disabled>{{session('form_data')['villeLivraison']}}</option>
          </select>
          <ul id="results2"></ul>
        </div>
      </div>
      <div class="form-group mb-3">
        <label for="dateLivraison">Date voulue de livraison:</label>
        <input type="date" class="form-control" id="dateExpedition2" name="dateLivraison"  value="{{session('form_data')['dateLivraison']}}">
      </div>

      <h6 class="category-title color">Informations sur la marchandise</h6>

      <label for="dateExpedition">Type de camion:</label>
      <select id="typeCamion" name="typeCamion" class="form-select regionForm form-select-lg mb-3" aria-label=".form-select-lg example"  value="{{session('form_data')['typeCamion']}}">
        @foreach ($types as $type)
          <option value="{{ $type->id }}">{{ $type->name}}</option>
        @endforeach
      </select>

      <div id="merchandiseContainer">
        <!-- Existing merchandise input fields -->
        <div class="form-group">
          <label for="typeMarchandise">Type de marchandise:</label>
          <input type="text" class="form-control" id="typeMarchandise" name="typeMarchandise"  value="{{session('form_data')['typeMarchandise']}}">
        </div>
      </div>
      <button id="addMerchandiseBtn" class="btn btn-primary"  onclick="event.preventDefault(); addMerchandiseItem();">Ajouter une nouvelle marchandise</button>


      <div class="d-flex justify-content-center mt-4">
        <div class="cmn-btn ">
          <a class="banner-btn-left"  onclick="submitFormOnClick()">
                Obtenir un devis
          </a>
        </div>
      </div>
    </form>
  </div>
</div>

  @include('web.footer')

  <script>
    function submitFormOnClick() {

    document.getElementById('search').submit(); // Soumet le formulaire avec l'ID 'search'
  }
  </script>

  <script>

    const searchUrl = "{{ route('recherche') }}";
    const resultsContainer = document.getElementById('results');
    const resultsContainer2 = document.getElementById('results2');
    
    const selectRegion = document.getElementById('selectRegion');
    const selectRegion2 = document.getElementById('selectRegion2');
    
    selectRegion.addEventListener('change', sendFormData);
    selectRegion2.addEventListener('change', sendFormData);
    
    function sendFormData() {
      event.preventDefault();
      
      const formData = new FormData(search);
      const query = formData.get('query');
      const query2 = formData.get('query2');
    
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
          const villesData2 = data[1];
    
          displayResults(villesData, resultsContainer);
          displayResults(villesData2, resultsContainer2);
        })
        .catch(error => {
          console.log(error);
        });
    }
    
    function displayResults(data, container) {
      container.innerHTML = '';
      const selectCity = container.previousElementSibling;
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

    

</script>
  
<script>
  // Counter for merchandise items
  let merchandiseCounter = 1;

  // Function to add a new merchandise item
  function addMerchandiseItem() {
    const merchandiseContainer = document.getElementById('merchandiseContainer');

    // Create a new div to hold the merchandise inputs
    const newItemDiv = document.createElement('div');
    newItemDiv.classList.add('form-group');
  
    // Create the input field for the new merchandise item
    const newItemInput = document.createElement('input');
    newItemInput.type = 'text';
    newItemInput.classList.add('form-control');
    newItemInput.name = `typeMarchandise${merchandiseCounter}`;
  
    // Create the label for the new merchandise item
    const newItemLabel = document.createElement('label');
    newItemLabel.htmlFor = `typeMarchandise${merchandiseCounter}`;
    newItemLabel.textContent = `Type de marchandise ${merchandiseCounter}:`;


    const typeCamionDropdown = document.createElement('select');
  typeCamionDropdown.id = `typeCamion${merchandiseCounter}`;
  typeCamionDropdown.name = `typeCamion${merchandiseCounter}`;
  typeCamionDropdown.classList.add('form-select', 'regionForm', 'form-select-lg', 'mb-3');
  typeCamionDropdown.setAttribute('aria-label', '.form-select-lg example');

  // Add options to the dropdown
 
  const options = [
    { value: 'option1', text: 'Option 1' },
    { value: 'option2', text: 'Option 2' },
    { value: 'option3', text: 'Option 3' },
    // Add more options as needed
  ];

  options.forEach(option => {
    const optionElement = document.createElement('option');
    optionElement.value = option.value;
    optionElement.textContent = option.text;
    typeCamionDropdown.appendChild(optionElement);
  });
    // Create the delete button for the new merchandise item
    const deleteBtn = document.createElement('button');
    deleteBtn.type = 'button';
deleteBtn.classList.add('btn-close');
deleteBtn.setAttribute('aria-label', 'Close');
    deleteBtn.addEventListener('click', function() {
      newItemDiv.remove(); // Remove the corresponding merchandise item when delete button is clicked
    });
  
    newItemDiv.appendChild(typeCamionDropdown);
    // Append the label, input, and delete button to the new div
    const labelContainer = document.createElement('div');
labelContainer.classList.add('d-flex', 'justify-content-between');
labelContainer.appendChild(newItemLabel);
labelContainer.appendChild(deleteBtn);

// Append the label container and input to the new div
newItemDiv.appendChild(labelContainer);
newItemDiv.appendChild(newItemInput);
// ...

    // Append the new div to the merchandise container
    merchandiseContainer.appendChild(newItemDiv);
  
    // Increment the merchandise counter for the next item
    merchandiseCounter++;
  }
  
  // Add event listener to the "Ajouter une nouvelle marchandise" button
 
</script>
