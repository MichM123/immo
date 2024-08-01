@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="container-fluid mx-auto px-4 py-6 flex space-x-6">
        <!-- Map -->
        <div class="w-2/3 bg-black-100 rounded shadow-lg p-4">
            <div id="map" class="w-full h-96"></div>
        </div>
        <!-- Filter Options -->
        <div class="w-1/3 bg-white rounded shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Trouvez votre maison de rêve au Bénin</h2>
            <form action="#">
                <div class="mb-4">
                    <label for="location" class="block text-gray-700">Location</label>
                    <input type="text" id="location" name="location" class="w-full px-3 py-2 border rounded"
                        placeholder="Location">
                </div>
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-blue-600">
                        <span class="ml-2">Rayon 50 km</span>
                    </label>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700">Status</label>
                    <select id="status" name="status" class="w-full px-3 py-2 border rounded">
                        <option>Toutes les villes</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="mb-4 flex space-x-2">
                    <div class="w-1/2">
                        <label for="type" class="block text-gray-700">Type</label>
                        <select id="type" name="type" class="w-full px-3 py-2 border rounded">
                            <option>Type</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="w-1/2">
                        <label for="chambres" class="block text-gray-700">Chambres</label>
                        <select id="chambres" name="chambres" class="w-full px-3 py-2 border rounded">
                            <option>Chambres</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>
                <div class="mb-4 flex space-x-2">
                    <div class="w-1/2">
                        <label for="salles-de-bain" class="block text-gray-700">Salles de bain</label>
                        <select id="salles-de-bain" name="salles-de-bain" class="w-full px-3 py-2 border rounded">
                            <option>Salles de bain</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="w-1/2">
                        <label for="max-price" class="block text-gray-700">Échelle de prix</label>
                        <input type="range" id="max-price" name="max-price" class="w-full">
                        <span>De 1.000 CFA A 1.000.000 CFA</span>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="superficie" class="block text-gray-700">Superficie maximale</label>
                    <input type="number" id="superficie" name="superficie" class="w-full px-3 py-2 border rounded"
                        placeholder="Superficie maximale">
                </div>
                <div class="mb-4">
                    <label for="propriete-id" class="block text-gray-700">Identifiant de la propriété</label>
                    <input type="text" id="propriete-id" name="propriete-id" class="w-full px-3 py-2 border rounded"
                        placeholder="Identifiant de la propriété">
                </div>
                <div class="mb-4">
                    <label for="label" class="block text-gray-700">Label</label>
                    <input type="text" id="label" name="label" class="w-full px-3 py-2 border rounded"
                        placeholder="Label">
                </div>
                <div class="mb-4">
                    <label for="zone-minimale" class="block text-gray-700">Zone minimale</label>
                    <input type="text" id="zone-minimale" name="zone-minimale" class="w-full px-3 py-2 border rounded"
                        placeholder="Zone minimale">
                </div>
                <div class="flex space-x-2">
                    <button type="submit" class="w-1/2 bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded">Recherche</button>
                    <button type="button" class="w-1/2 bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">Enregistrer la recherche</button>
                </div>
            </form>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        // Initialize map (You need to include a map library like Leaflet.js for this)
        var map = L.map('map').setView([9.3077, 2.3158], 7);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
        }).addTo(map);

        // Add markers to the map
        var marker1 = L.marker([9.3077, 2.3158]).addTo(map);
        var marker2 = L.marker([6.3703, 2.3912]).addTo(map);
        var marker3 = L.marker([7.5398, 1.0197]).addTo(map);
    </script>
@endsection