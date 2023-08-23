@include('web.header')


<head>
    <body class="d-flex flex-column min-vh-100 bg-light mt-5" >

        </div>
        
        
  @include('web.navbar')
        
        
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
          <select id="selectRegion" name="query" class="form-select regionForm form-select-lg mb-3" aria-label=".form-select-lg example">
            @foreach ($regions as $region)
              <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-6 mb-1">
          <label for="villeEnlevement">Ville d'enlèvement:</label>

          <select id="selectCity" name="villeEnlevement" class="form-select form-select-lg mb-3 @error('villeEnlevement') is-invalid @enderror"   value="{{ old('villeEnlevement') }}" aria-label=".form-select-lg example" required>
            @error('villeEnlevement')
    <div class="invalid-feedback">
        svp sélectionnez une ville
    </div>
@enderror

            <option selected disabled>Ville</option>
          </select>
          <ul id="results"></ul>
        </div>
      </div>

     
      <div class="form-group mb-4">
        <label for="precisEnlevement">Précisé le lieu d'enlèvement:</label>
        <input type="text" class="form-control @error('precisEnlevement') is-invalid @enderror"  value="{{ old('precisEnlevement') }}"  name="" required >
        @error('precisEnlevement')
    <div class="invalid-feedback">
        Préciser le lieu d'enlèvement
    </div>

   @enderror
   
      </div>

      <div class="form-group mb-4">
        <label for="dateEnlevement">Date voulue d'enlèvement:</label>
        <input type="date" class="form-control @error('dateEnlevement') is-invalid @enderror"  value="{{ old('dateEnlevement') }}" id="dateExpedition" name="dateEnlevement" required >
        @error('dateEnlevement')
    <div class="invalid-feedback">
        vous ne pouvez pas sélectionner une date passée
    </div>
   @enderror
   
      </div>
      

      <h6 class="category-title color ">Informations sur la livraison</h6>

      <div class="row">
        <div class="col-md-6 mb-1">
          <label for="regionLivraison ">Région de livraison:</label>
          <select id="selectRegion2" name="query2" class="form-select regionForm form-select-lg mb-3" aria-label=".form-select-lg example">
            @foreach ($regions as $region)
              <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-6 mb-1">
          <label for="villeLivraison">Ville de livraison:</label>
          <select id="selectCity2" name="villeLivraison" class="form-select form-select-lg mb-3   @error('villeLivraison') is-invalid @enderror"  value="{{ old('villeLivraison') }}" id="dateExpedition"  aria-label=".form-select-lg example">
            @error('villeLivraison')
            <div class="invalid-feedback">
                svp sélectionnez une ville
            </div>
           @enderror
            <option selected disabled>Ville</option>
          </select>
          <ul id="results2"></ul>
        </div>
      </div>

      <div class="form-group mb-4">
        <label for="precisLivraison">Précisé le lieu de livraison:</label>
        <input type="text" class="form-control @error('precisLivraison') is-invalid @enderror"  value="{{ old('precisLivraison') }}"  name="" required >
        @error('precisLivraison')
    <div class="invalid-feedback">
        Préciser le lieu de livraison
    </div>
    @enderror
  </div>

      <div class="form-group mb-3">
        <label for="dateLivraison">Date voulue de livraison:</label>
        <input type="date" class="form-control @error('dateLivraison') is-invalid @enderror"  value="{{ old('dateLivraison') }}"  aria-label=".form-select-lg example" id="dateExpedition2" name="dateLivraison" >
        @error('dateLivraison')
        <div class="invalid-feedback">
            vous ne pouvez pas sélectionner une date passée
        </div>
       @enderror
      </div>

      <h6 class="category-title color">Informations sur la marchandise</h6>

      <label for="typeCamion">Type de camion:</label>
      <select id="typeCamion" name="typeCamion" class="form-select regionForm form-select-lg mb-3 @error('typeCamion') is-invalid @enderror"  value="{{ old('typeCamion') }}"  aria-label=".form-select-lg example" required>
        @error('typeCamion')
        <div class="invalid-feedback">
            svp sélectionnez un type de camion
        </div>
       @enderror
        @foreach ($types as $type)
          <option value="{{ $type->id }}">{{ $type->name}}</option>
        @endforeach
      </select>

      <label for="typeMarchandise">Type de marchandise:</label>
      <select id="typeMarchandise" name="typeMarchandise" class="form-select regionForm form-select-lg mb-3 @error('typeMarchandise') is-invalid @enderror"  value="{{ old('typeMarchandise') }}"  aria-label=".form-select-lg example" required>
        @error('typeMarchandise')
        <div class="invalid-feedback">
            svp sélectionnez un type de camion
        </div>
       @enderror
        @foreach ($typesMarchandise as $typeMarchandise)
          <option value="{{ $typeMarchandise->id }}">{{ $typeMarchandise->name}}</option>
        @endforeach
      </select>

      

      <div class="d-flex justify-content-center mt-4">
        <div class="cmn-btn mb-5">
          <a class="banner-btn-left" onclick="submitFormOnClick()" style="cursor:pointer">
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

    document.getElementById('search').submit(); 
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
