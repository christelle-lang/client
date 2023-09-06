

<div class="card" id="tableBody">
    <div class="card-header "  >
        Demandes en attente
    </div>
    <div class="card-body" >
        @if(count($demandesEnAttente) > 0)
        <table class="table table-striped " >
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
                @foreach ($demandesEnAttente as $demandeEnAttente)
                <tr>
                    <td>{{ $demandeEnAttente->codeDemande }}</td>
                    <td>{{ $demandeEnAttente->lieuEnlevement }} à {{ $demandeEnAttente->lieuExpedition }}</td>
                    <td>{{ $demandeEnAttente->dateEnlevement }} à {{ $demandeEnAttente->dateLivraison }}</td>
                    <td>{{ $demandeEnAttente->montant }}</td>
                    <td>
                        @if ($demandeEnAttente->statutPaiement == 'non payé')
                        <span class="btn btn-danger text-btn" style="cursor: text">{{ $demandeEnAttente->statutPaiement }}</span>
                        @else
                        <span class="btn btn-success text-btn" style="cursor: text">{{ $demandeEnAttente->statutPaiement }}</span>
                        @endif
                    </td>
                    <td>
                        <span class="btn btn-warning text-btn" style="cursor: text">{{ $demandeEnAttente->statut }}</span>
                    </td>
                    <td>{{ $demandeEnAttente->created_at }}</td>
                    <td>
                        <form action="/annuler_demandes/{{ $demandeEnAttente->id }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Annuler</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center" id="pagination">
                @for ($i = 1; $i <= $demandesEnAttente->lastPage(); $i++)
                    <li class="page-item{{ $i == $demandesEnAttente->currentPage() ? ' active' : '' }}">
                        <a class="page-link" href="#" onclick="loadPageAttente({{ $i }})">{{ $i }}</a>
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
   
</script>