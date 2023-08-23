
<div class="card">
    <div class="card-header">
       Demandes en attente
    </div>
    <div class="card-body">
        @foreach ($demandesEnAttente as $demandeEnAttente)
        <div class="card w-100">
            <div class="card-body">
                @if(empty($demandeEnAttente))
                <p>Aucune demande en attente</p>
                @else
                <h5 class="card-title"> Demande {{ $demandeEnAttente->codeDemande}}</h5>

                Destination: {{ $demandeEnAttente->lieuEnlevement}} à {{ $demandeEnAttente->lieuExpedition}} <br>
                Date: {{ $demandeEnAttente->dateEnlevement}} à {{ $demandeEnAttente->dateLivraison}} <br>
                Montant: <span class="fw-bold">{{ $demandeEnAttente->montant}} </span><br>
                Statut paiement:  @if ($demandeEnAttente->statutPaiement == 'non payé')
                <a href="#" class="btn btn-danger text-btn" style="cursor: text">{{ $demandeEnAttente->statutPaiement }}</a>
            @else
                <a href="#" class="btn btn-success text-btn" style="cursor: text">{{ $demandeEnAttente->statutPaiement }}</a>
            @endif
                <br>
                Statut:<a href="#" class="btn btn-warning text-btn" style="cursor: text">{{ $demandeEnAttente->statut }}</a>    <br>            

                créé le: {{ $demandeEnAttente->created_at }}
            </div>
            @endif
            <div class="card-footer d-flex justify-content-center">
                <form action="/annuler_demandes/{{ $demandeEnAttente->id }}" method="post">
                <button type="submit" class="btn btn-danger">Annuler</button>
               </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
