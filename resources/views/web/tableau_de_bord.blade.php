<div class="card">
    <div class="card-header">
       Tableau de bord
    </div>
    <div class="card-body">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Demandes effectuées</div>
                        <div class="card-body">
                            <h5 class="card-title">{{$counts['total']}} Demandes éffectuées <i class="fas fa-clipboard-check"></i></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-header">Demandes en attente</div>
                        <div class="card-body">
                            <h5 class="card-title">{{$counts['en_attente']}} Demandes en attente <i class="fas fa-hourglass"></i></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-header">Demandes acceptées</div>
                        <div class="card-body">
                            <h5 class="card-title">{{$counts['accepte']}} Demandes acceptées <i class="fas fa-check"></i></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">Demandes en cours</div>
                        <div class="card-body">
                            <h5 class="card-title">{{$counts['en_cours']}} Demandes en cours <i class="fas fa-cog"></i></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Demandes terminées</div>
                        <div class="card-body">
                            <h5 class="card-title">{{$counts['termine']}} Demandes terminées <i class="fas fa-check-circle"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
