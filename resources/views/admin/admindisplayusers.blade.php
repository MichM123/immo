@extends('layouts.appadmin')

@section('content')
@if (!empty($users))
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
                                {{ $users->profession }}
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
                                {{ $users->numero }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="alert alert-danger mt-4">Aucun bien</div>
@endif
@endsection
