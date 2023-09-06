<div class="card">
    <div class="card-header">
       Tableau de bord
    </div>
    <div class="card-body">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header"><i class="fas fa-clipboard-check"></i> Demandes effectuées</div>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center">{{$counts['total']}}  </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header"><i class="fas fa-hourglass"></i> Demandes en attente</div>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center">{{$counts['en_attente']}}  </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header"><i class="fas fa-check"></i> Demandes acceptées</div>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center">{{$counts['accepte']}} </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header"><i class="fas fa-cog"> </i> Demandes en cours</div>
                        <div class="card-body">
                            <h5 class="card-title"  style="text-align: center">{{$counts['en_cours']}} </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header"><i class="fas fa-check-circle"></i> Demandes terminées</div>
                        <div class="card-body">
                            <h5 class="card-title " style="text-align: center"> {{$counts['termine']}}  </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
