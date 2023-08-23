
<div class="card">
    <div class="card-header">
       Dernières demandes
    </div>
    <div class="card-body" id="demandes-container">
        @foreach ($demandes as $demande)
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title"> Demande {{ $demande->codeDemande}}</h5>

                Destination: {{ $demande->lieuEnlevement}} à {{ $demande->lieuExpedition}} <br>
                Date: {{ $demande->dateEnlevement}} à {{ $demande->dateLivraison}} <br>
                Montant: <span class="fw-bold">{{ $demande->montant}} </span><br>
                Statut paiement:
                @if ($demande->statutPaiement == 'non payé')
                    <a href="#" class="btn btn-danger text-btn" style="cursor: text">{{ $demande->statutPaiement }}</a>
                @else
                    <a href="#" class="btn btn-success text-btn" style="cursor: text">{{ $demande->statutPaiement }}</a>
                @endif
                <br>
                Statut:
                @if ($demande->statut == 'en attente')
                    <a href="#" class="btn btn-warning text-btn" style="cursor: text">{{ $demande->statut }}</a>
                @elseif ($demande->statut == 'accepte')
                    <a href="#" class="btn btn-success text-btn" style="cursor: text">{{ $demande->statut }}</a>
                @elseif ($demande->statut == 'termine')
                    <a href="#" class="btn btn-dark text-btn" style="cursor: text">{{ $demande->statut }}</a>
                @elseif ($demande->statut == 'en cours')
                    <a href="#" class="btn btn-primary text-btn" style="cursor: text">{{ $demande->statut }}</a>
                @endif
                <br>

                créé le: {{ $demande->created_at }}
            </div>
            <div class="card-footer d-flex justify-content-center">

                @if ($demande->statut == 'en attente' || ($demande->statut == 'accepte' && $demande->statutPaiement == 'non payé'))
<div>
                    <form action="/annuler_demandes/{{ $demande->id }}" method="post">
                        @csrf
                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette demande ?')">Annuler</button>
                    </form>
                </div>
                @endif

                @if ($demande->statut == 'accepte' && $demande->statutPaiement == 'non payé')
                <div>
                    <a href="#" class="btn btn-primary text-btn">Payer</a>
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @for ($i = 1; $i <= $demandes->lastPage(); $i++)
                <li class="page-item{{ $i == $demandes->currentPage() ? ' active' : '' }}">
                    <a class="page-link page-link-ajax" href="#" data-url="{{ $demandes->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
        </ul>
    </nav>
                                                                                                                                                                                                                      
</div>

  
<script>
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
