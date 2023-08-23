
<div class="card">
    <div class="card-header">
        Quote
    </div>
    <div class="card-body">
        @foreach ($demandesEnCours as $demandeEnCours)
        <div class="card w-100">
            <div class="card-body">
                @if(empty($demandeEnCours))
                 <p>Aucune demande en cours</p>
                 @else
                <h5 class="card-title"> Demande {{ $demandeEnCours->codeDemande}}</h5>

                Destination: {{ $demandeEnCours->lieuEnlevement}} à {{ $demandeEnCours->lieuExpedition}} <br>
                Date: {{ $demandeEnCours->dateEnlevement}} à {{ $demandeEnCours->dateLivraison}} <br>
                Montant: <span class="fw-bold">{{ $demandeEnCours->montant}} </span><br>
                Statut paiement:{{ $demandeEnCours->statutPaiement}}
               
                <br>
                Statut:{{ $demandeEnCours->statut}}
                

                créé le: {{ $demande->created_at }}
            </div>
            @endif
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
</div>


  <nav aria-label="Page navigation example">
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




  
  
  
  
  
  