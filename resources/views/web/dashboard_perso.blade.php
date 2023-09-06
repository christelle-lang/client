@include('web.header')


<head>
    <body class="d-flex flex-column min-vh-100 bg-light mt-5" >

        </div>
        
        
  @include('web.navbar')


    
  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-3">
            <div class="card menu-card">
                <div class="card-header">
                    <h4 class="card-title">Menu</h4>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class=" menu-item list-group-item list-group-item-action" id="tableau_de_bord">
                            <i class="fas fa-user"></i>  Tableau de bord
                        </a>
                        <a href="#" class="menu-item list-group-item list-group-item-action" id="dernieres_demandes">
                            <i class="fas fa-clipboard-check"></i>  Demandes éffectuées
                        </a>
                        <a href="#" class="menu-item list-group-item list-group-item-action" id="demandes_en_attente">
                            <i class="fas fa-hourglass"></i>  Demandes en attente
                        </a>
                        <a href="#" class="menu-item list-group-item list-group-item-action" id="demandes_acceptees">
                            <i class="fas fa-check"></i>  Demandes acceptées
                        </a>
                        <a href="#" class="menu-item list-group-item list-group-item-action" id="demandes_en_cours">
                            <i class="fas fa-cog"></i>  Demandes en cours
                        </a>
                        <a href="#" class="menu-item list-group-item list-group-item-action" id="demandes_terminées ">
                            <i class="fas fa-check-circle"></i>  Demandes terminées 
                        </a>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="{{ route('deconnexion_client') }}" method="post">
                        @csrf
                        <button type="submit" class="btn d-flex justify-content-center" style="color:#fdb819; ">Déconnexion</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-9">
          <div id="tableau-de-bord-content"></div>
          <div id="dernieres-demandes-content"></div>
          <div id="demandes-en-cours-content"></div>
          <div id="demandes-en-attente-content"></div>
          <div id="demandes-acceptees-content"></div>



            </div>
        </div>
    </div>

@include('web.footer')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    const menuItems = document.querySelectorAll(".menu-item");

    menuItems.forEach(item => {
        item.addEventListener("click", function() {
            // Supprimez la classe 'active' de tous les éléments du menu
            menuItems.forEach(menuItem => {
                menuItem.classList.remove("active");
            });

            // Ajoutez la classe 'active' à l'élément du menu actuel
            this.classList.add("active");

            // Ajoutez également la classe 'active-menu-item' pour le style de fond jaune
            this.classList.add("active-menu-item");
        });
    });
});

    </script>
    <script>
        function loadPageEffectue(pageNumber) {
   
   fetch(`/dernieres_demandes?page=${pageNumber}`)
      .then(response => response.text())
       .then(data => {
           const tableBody = document.getElementById("tableBody");
           tableBody.innerHTML = data; // Mettre à jour le contenu du tableau avec la nouvelle page
       })
       .catch(error => {
           console.error("Une erreur s'est produite:", error);
  });
    }
    </script>

   <script>
     function loadPageAttente(pageNumber) {
   
    fetch(`/demandes_attente?page=${pageNumber}`)
       .then(response => response.text())
        .then(data => {
            const tableBody = document.getElementById("tableBody");
            tableBody.innerHTML = data; // Mettre à jour le contenu du tableau avec la nouvelle page
        })
        .catch(error => {
            console.error("Une erreur s'est produite:", error);
   });
     }



   </script>
  




    <script>document.addEventListener('DOMContentLoaded', function () {
      const tableauDeBordLink = document.getElementById('tableau_de_bord');
      const dernieresDemandesLink = document.getElementById('dernieres_demandes');
      const demandesEnCoursLink = document.getElementById('demandes_en_cours'); // Correction ici
      const demandesEnAttenteLink = document.getElementById('demandes_en_attente'); // Ajout du lien pour demandes en attente
      const demandesAccepteesLink = document.getElementById('demandes_acceptees'); // Ajout du lien pour demandes en attente

      const paginationLinks = document.querySelectorAll('.pagination a');
      const tableauDeBordContent = document.getElementById('tableau-de-bord-content');
      const demandesAccepteesContent = document.getElementById('demandes-acceptees-content');

      const dernieresDemandesContent = document.getElementById('dernieres-demandes-content');
      const demandesEnCoursContent = document.getElementById('demandes-en-cours-content'); // Ajout du contenu pour demandes en attente

      const demandesEnAttenteContent = document.getElementById('demandes-en-attente-content'); // Ajout du contenu pour demandes en attente

   
  const loadTableauDeBord = (pageUrl) => {
    fetch(pageUrl)
        .then(response => response.text())
        .then(data => {
            // Met à jour les valeurs dans les cartes avec les données reçues
            tableauDeBordContent.innerHTML = data;

        })
        .catch(error => {
            console.error('Une erreur s\'est produite lors du chargement des données:', error);
        });
};

  
      const loadDernieresDemandes = (pageUrl) => {
          fetch(pageUrl)
              .then(response => response.text())
              .then(data => {
                dernieresDemandesContent.innerHTML = data;
              });
      };
     
      const loadDemandesEnAttente = (pageUrl) => {
          fetch(pageUrl)
              .then(response => response.text())
              .then(data => {
                demandesEnAttenteContent.innerHTML = data;
              });
      };
     
        
      const loadDemandesEnCours= (pageUrl) => {
          fetch(pageUrl)
              .then(response => response.text())
              .then(data => {
                demandesEnCoursContent.innerHTML = data;
              });
      };
     
      const loadDemandesAcceptees= (pageUrl) => {
          fetch(pageUrl)
              .then(response => response.text())
              .then(data => {
                demandesAccepteesContent.innerHTML = data;
              });
      };
     
  
  
  
       
      tableauDeBordLink.addEventListener('click', function () {
        demandesEnAttenteContent.style.display = 'none';

        dernieresDemandesContent.style.display = 'none';

          tableauDeBordContent.style.display = 'block';
          loadTableauDeBord("{{ route('tableau_de_bord') }}");
          localStorage.setItem('currentContent', 'tableau-de-bord-content');


      });
  
      dernieresDemandesLink.addEventListener('click', function () {
        demandesEnAttenteContent.style.display = 'none';
        tableauDeBordContent.style.display = 'none';
        demandesEnCoursContent.style.display = 'none';
          dernieresDemandesContent.style.display = 'block';
          loadDernieresDemandes(`{{ route('dernieres_demandes') }}`);
          localStorage.setItem('currentContent', 'dernieres-demandes-content');
      });

      demandesEnAttenteLink.addEventListener('click', function () {
        dernieresDemandesContent.style.display = 'none';
        tableauDeBordContent.style.display = 'none';
        demandesEnCoursContent.style.display = 'none';
        demandesEnAttenteContent.style.display = 'block';
          loadDemandesEnAttente(`{{ route('demandes_attente') }}`);
          localStorage.setItem('currentContent', 'demandes-en-attente-content');
      });
      
      demandesEnCoursLink.addEventListener('click', function () {
        dernieresDemandesContent.style.display = 'none';
        tableauDeBordContent.style.display = 'none';
        demandesEnAttenteContent.style.display = 'none';
        demandesEnCoursContent.style.display = 'none';
        demandesEnCoursContent.style.display = 'block';
          loadDemandesEnCours(`{{ route('demandes_en_cours') }}`);
          localStorage.setItem('currentContent', 'demandes-en-cours-content');
      });
          
      demandesAccepteesLink.addEventListener('click', function () {
        dernieresDemandesContent.style.display = 'none';
        tableauDeBordContent.style.display = 'none';
        demandesEnAttenteContent.style.display = 'none';
        demandesEnCoursContent.style.display = 'none';
        demandesAccepteesContent.style.display = 'block';
        loadDemandesAcceptees(`{{ route('demandes_acceptees') }}`);
          localStorage.setItem('currentContent', 'demandes-acceptees-content');
      });
          
      
  
     
      const currentContent = localStorage.getItem('currentContent');
      if (currentContent === 'tableau-de-bord-content') {
        tableauDeBordLink.click();
      }else if(currentContent === 'dernieres-demandes-content') {
        dernieresDemandesLink.click();
      }
      else if(currentContent === 'demandes-en-attente-content') {
        demandesEnAttenteLink.click();
      }
      else if(currentContent === 'demandes-en-cours-content') {
        demandesEnCoursLink.click();
      }
       else {
          tableauDeBordLink.click();
      }
  });
  
  
  </script>
  
{{--       
      
  paginationLinks.forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault(); // Empêche la navigation vers l'URL
        const pageUrl = this.getAttribute('href');
        loadDernieresDemandes(pageUrl);
        localStorage.setItem('currentContentp', 'dernieres-demandes-content');
    });
}); --}}

    </body>
    
    <!-- Mirrored from templates.hibootstrap.com/audeck/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2023 17:27:49 GMT -->
    </html>