<div class="card"  id="tableBody">
    <div class="card-header">
        Dernières demandes
    </div>
    <div class="card-body">
        @if(count($demandes) > 0)

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Code Demande</th>
                    <th>Destination</th>
                    <th>Date</th>
                    <th>Montant</th>
                    <th>Statut Paiement</th>
                    <th>Statut</th>
                    <th>Créé le</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($demandes as $demande)
                <tr>
                    <td>{{ $demande->codeDemande }}</td>
                    <td>{{ $demande->lieuEnlevement }} à {{ $demande->lieuExpedition }}</td>
                    <td>{{ $demande->dateEnlevement }} à {{ $demande->dateLivraison }}</td>
                    <td>{{ $demande->montant }}</td>
                    <td>
                        @if ($demande->statutPaiement == 'non payé')
                            <span class="btn btn-danger text-btn" style="cursor: text">{{ $demande->statutPaiement }}</span>
                        @else
                            <span class="btn btn-success text-btn" style="cursor: text">{{ $demande->statutPaiement }}</span>
                        @endif
                    </td>
                    <td>
                        @if ($demande->statut == 'en attente')
                            <span class="btn btn-warning text-btn" style="cursor: text">{{ $demande->statut }}</span>
                        @elseif ($demande->statut == 'accepte')
                            <span class="btn btn-success text-btn" style="cursor: text">{{ $demande->statut }}</span>
                        @elseif ($demande->statut == 'termine')
                            <span class="btn btn-dark text-btn" style="cursor: text">{{ $demande->statut }}</span>
                        @elseif ($demande->statut == 'en cours')
                            <span class="btn btn-primary text-btn" style="cursor: text">{{ $demande->statut }}</span>
                        @endif
                    </td>
                    <td>{{ $demande->created_at }}</td>
                    <td>
                        @if ($demande->statut == 'en attente' || ($demande->statut == 'accepte' && $demande->statutPaiement == 'non payé'))
                            <form action="/annuler_demandes/{{ $demande->id }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette demande ?')">Annuler</button>
                            </form> <br>
                        @endif

                        @if ($demande->statut == 'accepte' && $demande->statutPaiement == 'non payé')
                            <a href="#" class="btn btn-primary text-btn">Payer</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
   
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center" id="pagination">
                @for ($i = 1; $i <= $demandes->lastPage(); $i++)
                    <li class="page-item{{ $i == $demandes->currentPage() ? ' active' : '' }}">
                        <a class="page-link" href="#" onclick="loadPageEffectue({{ $i }})">{{ $i }}</a>
                    </li>
                @endfor
            </ul>
            
        </nav>
        @else 
        <p>Aucune demande en attente</p>
        @endif
    </div>
</div>


  
<script>


document.addEventListener("DOMContentLoaded", function() {
        // Charger les données initiales
        loadDemandes("{{ $demandes->url($demandes->currentPage()) }}");

        // Lorsqu'un lien de pagination est cliqué
        $(document).on("click", ".pagination a", function(event) {
            event.preventDefault();
            var url = $(this).attr("href");
            loadDemandes(url);
        });

        // Fonction pour charger les demandes via AJAX
        function loadDemandes(url) {
            $.ajax({
                url: url,
                success: function(data) {
                    $("#demandes-container").html(data);
                },
                error: function(xhr, status, error) {
                    console.error("Une erreur s'est produite:", error);
                }
            });
        }
    });
    
const paginationContainer = document.querySelector(".pagination");
const demandesContainer = document.getElementById("demandes-container");

paginationContainer.addEventListener("click", (event) => {
    if (event.target.classList.contains("page-link-ajax")) {
        event.preventDefault();
        const url = event.target.getAttribute("data-url");

        fetch(url, {
            method: "GET",
            headers: {
                "X-Requested-With": "XMLHttpRequest",
            },
        })
        .then(response => response.text())
        .then(data => {
            demandesContainer.innerHTML = data;
        })
        .catch(error => {
            console.error("Une erreur s'est produite :", error);
        });
    }
});

</script> 

{{--   
  <script>
  const paginationLinks = document.querySelectorAll(".pagination a.page-link");

  paginationLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault();
      const url = event.target.href;

      fetch(url, {
        method: "GET",
        headers: {
          "X-Requested-With": "XMLHttpRequest", // Pour indiquer une requête AJAX
        },
      })
      .then(response => response.text())
      .then(data => {
        // Mettez à jour le contenu de la div "card-body" avec le contenu de la réponse
        const cardBody = document.querySelector(".card-body");
        cardBody.innerHTML = data;

        // Mettez à jour les liens de pagination pour qu'ils fonctionnent avec la nouvelle page
        const newPagination = document.querySelector(".pagination");
        const newLinks = newPagination.querySelectorAll("a.page-link");
        newLinks.forEach(newLink => {
          newLink.addEventListener("click", (newEvent) => {
            newEvent.preventDefault();
            // Répétez le processus Fetch pour la nouvelle page ici...
          });
        });
      })
      .catch(error => {
        console.error("Une erreur s'est produite :", error);
      });
    });
  });
</script> --}}


  {{-- <nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item{{ $demandes->currentPage() == 1 ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $demandes->url(1) }}" aria-label="First">
                <span aria-hidden="true">&laquo;&laquo;</span>
            </a>
        </li>
        <li class="page-item{{ $demandes->currentPage() == 1 ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $demandes->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        @for ($i = 1; $i <= $demandes->lastPage(); $i++)
        <li class="page-item{{ $i == $demandes->currentPage() ? ' active' : '' }}">
            <a class="page-link" href="{{ $demandes->url($i) }}">{{ $i }}</a>
        </li>
        @endfor

        <li class="page-item{{ $demandes->currentPage() == $demandes->lastPage() ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $demandes->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
        <li class="page-item{{ $demandes->currentPage() == $demandes->lastPage() ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $demandes->url($demandes->lastPage()) }}" aria-label="Last">
                <span aria-hidden="true">&raquo;&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
 --}}
