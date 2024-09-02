@extends('layouts.appadmin')

@section('content')
@if (!empty($bien))
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Détails du bien</h5>
        </div>
        <div class="card-body">
            <div class="accordion" id="hospital-details">
                 
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNom">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNom" aria-expanded="true" aria-controls="collapseNom">
                            Nom
                        </button>
                    </h2>
                    <div id="collapseNom" class="accordion-collapse collapse show" aria-labelledby="headingNom" data-bs-parent="#hospital-details">
                        <div class="accordion-body">
                            {{ $bien->nom }}
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingDescription">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDescription" aria-expanded="false" aria-controls="collapseDescription">
                            Description
                        </button>
                    </h2>
                    <div id="collapseDescription" class="accordion-collapse collapse" aria-labelledby="headingDescription" data-bs-parent="#hospital-details">
                        <div class="accordion-body">
                            {{ $bien->description }}
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingAdresse">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAdresse" aria-expanded="false" aria-controls="collapseAdresse">
                            Adresse
                        </button>
                    </h2>
                    <div id="collapseAdresse" class="accordion-collapse collapse" aria-labelledby="headingAdresse" data-bs-parent="#hospital-details">
                        <div class="accordion-body">
                            {{ $bien->adresse }}
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSuperficie">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSuperficie" aria-expanded="false" aria-controls="collapseSuperficie">
                            Superficie
                        </button>
                    </h2>
                    <div id="collapseSuperficie" class="accordion-collapse collapse" aria-labelledby="headingSuperficie" data-bs-parent="#hospital-details">
                        <div class="accordion-body">
                            {{ $bien->superficie }}
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingNombrePieces">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNombrePieces" aria-expanded="false" aria-controls="collapseNombrePieces">
                            Nombre de pièces
                        </button>
                    </h2>
                    <div id="collapseNombrePieces" class="accordion-collapse collapse" aria-labelledby="headingNombrePieces" data-bs-parent="#hospital-details">
                        <div class="accordion-body">
                            {{ $bien->nombre_pieces }}
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingPrix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrix" aria-expanded="false" aria-controls="collapsePrix">
                            Prix
                        </button>
                    </h2>
                    <div id="collapsePrix" class="accordion-collapse collapse" aria-labelledby="headingPrix" data-bs-parent="#hospital-details">
                        <div class="accordion-body">
                            {{ $bien->prix }}
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingType">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseType" aria-expanded="false" aria-controls="collapseType">
                            Type
                        </button>
                    </h2>
                    <div id="collapseType" class="accordion-collapse collapse" aria-labelledby="headingType" data-bs-parent="#hospital-details">
                        <div class="accordion-body">
                            {{-- <p>{{ $bien->type_biens->nom }}</p> --}}
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingVille">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVille" aria-expanded="false" aria-controls="collapseVille">
                            Ville
                        </button>
                    </h2>
                    <div id="collapseVille" class="accordion-collapse collapse" aria-labelledby="headingVille" data-bs-parent="#hospital-details">
                        <div class="accordion-body">
                            {{ $bien->ville->nom }}
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingProprietaire">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProprietaire" aria-expanded="false" aria-controls="collapseProprietaire">
                            Propriétaire
                        </button>
                    </h2>
                    <div id="collapseProprietaire" class="accordion-collapse collapse" aria-labelledby="headingProprietaire" data-bs-parent="#hospital-details">
                        <div class="accordion-body">
                            {{ $bien->User->nom }} &nbsp; {{ $bien->User->prenom }}
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingStatus">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStatus" aria-expanded="false" aria-controls="collapseStatus">
                            Status
                        </button>
                    </h2>
                    <div id="collapseStatus" class="accordion-collapse collapse" aria-labelledby="headingStatus" data-bs-parent="#hospital-details">
                        <div class="accordion-body">
                            {{ $bien->statut }}
                        </div>
                    </div>
                </div>

            </div>
            
            @if ($bien->accept === 0)
                <form action="{{ route('admin.bien.update', $bien->id) }}" method="post" class="mt-3">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-danger">Publiez</button>
                </form>
            @else
                <button class="btn btn-success mt-3">Ajouté</button>
            @endif
        </div>
    </div>
</div>
@else
    <div class="alert alert-danger mt-4">Aucun bien</div>
@endif
@endsection
