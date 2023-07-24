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


 <title>Document</title>

<body>
    
</body>
</html>
<body>
    


<div class="d-flex ">
<div>
<form id="searchForm">
    @csrf
   

    <select  id="selectRegion" name="query" class="form-select regionForm form-select-lg mb-3" aria-label=".form-select-lg example">
        @foreach ($regions as $region)
            <option value="{{ $region->id }}">{{ $region->name }}</option>
        @endforeach
   </select>
  </form>
</div>
<div>
  <select id="selectCity" class="mt-4 form-select form-select-lg mb-3" aria-label=".form-select-lg example">
    <option selected disabled>Ville</option>
  </select>
</div>
</div>
  <ul id="results"></ul>
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
  <script>
    const searchUrl = "{{ route('recherche') }}";
    const form = document.getElementById('searchForm');
    const resultsContainer = document.getElementById('results');

    selectRegion.addEventListener('change', function() {
        event.preventDefault(); // Empêche le rechargement de la page lors de la soumission du formulaire

sendFormData();
});
  
   function sendFormData() {
      event.preventDefault(); // Empêche le rechargement de la page lors de la soumission du formulaire
  
      const formData = new FormData(form);
      const query = formData.get('query');
      
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
          displayResults(data);
        })
        .catch(error => {
          console.log('error')
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
      option.textContent = result; // Utiliser result comme contenu du texte de l'option
      selectCity.appendChild(option);
    });
  }
  const camionNames = data[1]; // Récupérer les noms des camions à partir des données

camionNames.forEach(camionName => {
  const li = document.createElement('li');
  li.textContent = camionName; // Afficher le nom du camion
  resultsContainer.appendChild(li);
});

}
  </script>
 


</body>
  </html>