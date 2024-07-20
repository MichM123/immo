@extends('layouts.app')

@section('content')
    <div class="p-8"></div>
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl text-center font-bold mb-6">Création d'un Bien Immobilier</h1>

        <form method="POST" class="space-y-6" action="{{route('bien-submit')}}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Colonne gauche -->
                <div class="space-y-6">
                    <div class="form-group">            
                        <label for="type_id" class="block text-gray-700">Type</label>
                        <select name="type_id" id="type_id" class="block p-2 w-full mt-1 border rounded-lg">
                            <option value="">Sélectionnez un type</option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}">{{ $type->nom }}</option>
                            @endforeach
                        </select>
                    </div> 

                    <div class="form-group">
                        <label for="ville_id" class="block text-sm font-medium text-gray-700">Ville de Bien</label>
                        <select id="ville_id" name="ville_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            <option value="">Sélectionnez une ville</option>
                            @foreach($villes as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="code_postal" class="block text-sm font-medium text-gray-700">Code Postal</label>
                        <input type="number" id="code_postal" name="code_postal" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="form-group">
                        <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
                        <input type="text" id="adresse" name="adresse" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="superficie" class="block text-sm font-medium text-gray-700">Superficie (m²)</label>
                        <input type="number" id="superficie" name="superficie" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    
                </div>

                <!-- Colonne droite -->
                <div class="space-y-6">
                    <div class="form-group">
                        <label for="nombre_pieces" class="block text-sm font-medium text-gray-700">Nombre de Pièces</label>
                        <input type="number" id="nombre_pieces" name="nombre_pieces" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="form-group">
                        <label for="document" class="block text-sm font-medium text-gray-700">Document du Bien</label>
                        <input type="file" id="document" name="document" accept="application/pdf" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="form-group">
                        <label for="statut" class="block text-sm font-medium text-gray-700">Statut d'Annonce</label>
                        <select id="statut" name="statut" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            <option value="">Sélectionnez un statut</option>
                            <option value="Disponible">Disponible</option>
                            <option value="indisponible">indisponible</option>
                        </select>
                    </div>                    

                    <div class="form-group">
                        <label for="prix" class="block text-sm font-medium text-gray-700">prix</label>
                        <input type="number" id="prix" name="prix" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="urls" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" id="urls" name="urls[]" accept="image/*" multiple class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>

                    <div class="form-group">
                        <label for="type" class="block text-sm font-medium text-gray-700">Type d'Annonce</label>
                        <select id="type" name="type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                            <option value="">Sélectionnez un type d'annonce</option>
                            <option value="Vente">Vente</option>
                            <option value="Location">Location</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Créer</button>
        </form>
    </div>

@endsection
