

<div class="card" id="tableBody">
    <div class="card-header "  >
        Demandes en cours
    </div>
    <div class="card-body" >
        @if(count($demandesEnCours) > 0)
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
                @foreach ($demandesEnCours as $demandeEnCours)
                <tr>
                    <td>{{ $demandeEnCours->codeDemande }}</td>
                    <td>{{ $demandeEnCours->lieuEnlevement }} à {{ $demandeEnCours->lieuExpedition }}</td>
                    <td>{{ $demandeEnCours->dateEnlevement }} à {{ $demandeEnCours->dateLivraison }}</td>
                    <td>{{ $demandeEnCours->montant }}</td>
                    <td>
                        @if ($demandeEnCours->statutPaiement == 'non payé')
                        <span class="btn btn-danger text-btn" style="cursor: text">{{ $demandeEnCours->statutPaiement }}</span>
                        @else
                        <span class="btn btn-success text-btn" style="cursor: text">{{ $demandeEnCours->statutPaiement }}</span>
                        @endif
                    </td>
                    <td>
                        <span class="btn btn-warning text-btn" style="cursor: text">{{ $demandeEnCours->statut }}</span>
                    </td>
                    <td>{{ $demandeEnCours->created_at }}</td>
                    <td>
                        <form action="/annuler_demandes/{{ $demandeEnCours->id }}" method="post">
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
                @for ($i = 1; $i <= $demandesEnCours->lastPage(); $i++)
                    <li class="page-item{{ $i == $demandesEnCours->currentPage() ? ' active' : '' }}">
                        <a class="page-link" href="#" onclick="loadPageAttente({{ $i }})">{{ $i }}</a>
                    </li>
                @endfor
            </ul>
            
        </nav>

        @else 
        <p>Aucune demande en cours</p>
        @endif
    </div>
</div>

<script>
   
</script>