@extends('layouts.app')

@section('content')
    <div class="p-8"></div>
    <form action="{{route('biens-submit')}}" enctype="multipart/form-data" method="post">
        @csrf
        <label for="nom">nom</label>
        <input type="text"name="nom">

        <label for="adresse">adresse</label>
        <input type="text" name="adresse">

        <label for="description">description</label>
        <textarea name="description" id="description"></textarea>

        <label for="code_postal">code postal</label>
        <input type="number" name="code_postal">

        <label for="superficie">Superficie</label>
        <input type="number" name="superficie">

        <label for="nombre_pieces">nombre_pieces</label>
        <input type="number" name="nombre_pieces">

        <label for="prix">prix</label>
        <input type="number" name="prix">

        <label for="type_id">type</label>
        <select name="type_id" id="type_id">
            @foreach($types as $type)
                <option value="{{$type->id}}">{{$type->nom}}</option>
            @endforeach
        </select>

        <label for="ville_id">ville</label>
        <select name="ville_id" id="ville_id">
            @foreach($villes as $ville)
                <option value="{{$ville->id}}">{{$ville->nom}}</option>
            @endforeach
        </select>

        <label for="document">Document</label>
        <input type="file" name="document" id="document">

        <label for="statut">statut</label>
        <select name="statut" id="statut">
            <option value="Dispo">Dispo</option>
            <option value="Indispo">Indispo</option>
        </select>
        <label for="type">Type d'annonces</label>
        <select name="type" id="type">
            <option value="Vente">Vente</option>
            <option value="Location">Location</option>
        </select>
        <label for="images">images</label>
        <input type="file" name="images[]" id="images" multiple>
        
        <button type="submit">ENVOYER</button>
    </form>
@endsection
