@extends('layouts.app')

@section('content')
    <div class="p-8"></div>
    <form action="{{route('biens-submit')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="container mt-5">
            <h2 class="text-center mb-3">Ajouter un bien</h2>
            <div class="mb-3">
                <label for="nom" class="form-label">nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">adresse</label>
                <input type="text" class="form-control" name="adresse">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea name="description" class="form-control" id="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="code_postal" class="form-label">code postal</label>
                <input type="number" class="form-control" name="code_postal">
            </div>
            <div class="mb-3">
                <label for="superficie" class="form-label">Superficie</label>
                <input type="number" class="form-control" name="superficie">
            </div>
            <div class="mb-3">
                <label for="nombre_pieces" class="form-label">nombre_pieces</label>
                <input type="number" class="form-control" name="nombre_pieces">
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">prix</label>
                <input type="number" step="0.01" class="form-control" name="prix">
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">type</label>
                <select name="type_id" class="form-select" id="type_id">
                    @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="ville_id" class="form-label">ville</label>
                <select name="ville_id" class="form-select" id="ville_id">
                    @foreach($villes as $ville)
                        <option value="{{$ville->id}}">{{$ville->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="document" class="form-label">Document</label>
                <input type="file" class="form-control" name="document" id="document">
            </div>
            <div class="mb-3">
                <label for="statut" class="form-label">statut</label>
                <select name="statut" class="form-select" id="statut">
                    <option value="Dispo">Dispo</option>
                    <option value="Indispo">Indispo</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type d'annonces</label>
                <select name="type" class="form-select" id="type">
                    <option value="Vente">Vente</option>
                    <option value="Location">Location</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">images</label>
                <input type="file" name="images[]" id="images" class="form-control" multiple>
            </div>
        </div>  
        <button type="submit" class="btn btn-primary w-100">ENVOYER</button>
    </form>
@endsection
