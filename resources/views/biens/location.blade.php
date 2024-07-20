@extends('layouts.app')

@section('content')
    <section class="w-full p-8 bg-white shadow-md rounded-lg bg-cover bg-center h-96 relative" style="background-image: url('{{asset('image/12.webp')}}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class=" text-center text-white">
                <h2 class="text-4xl font-bold">Appartements à louer au Bénin</h2>
                <p class="mt-4 pt-4">Louez un appartement au Bénin</p>
                <form class="pt-4 mt-5 space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                    <label for="type" class="mt-1 block text-sm font-medium text-white-700">Type</label>
                    <select id="type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Types</option>
                        <option>Type 1</option>
                        <option>Type 2</option>
                    </select>
                    </div>
                    <div>
                    <label for="category" class="mt-1 block text-sm font-medium text-white-700">Catégorie</label>
                    <select id="category" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Catégories</option>
                        <option>Catégorie 1</option>
                        <option>Catégorie 2</option>
                    </select>
                    </div>
                    <div>
                    <label for="city" class="mt-1 block text-sm font-medium text-white-700">Ville</label>
                    <select id="city" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Villes</option>
                        <option>Ville 1</option>
                        <option>Ville 2</option>
                    </select>
                    </div>
                    <div>
                    <label for="district" class="mt-1 block text-sm font-medium text-while-700">Quartier</label>
                    <select id="district" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Quartiers</option>
                        <option>Quartier 1</option>
                        <option>Quartier 2</option>
                    </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                    <label for="min-price" class="block text-sm font-medium text-white-700">Prix Min</label>
                    <input type="number" id="min-price" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Prix Min">
                    </div>
                    <div>
                    <label for="max-price" class="block text-sm font-medium text-white-700">Prix Max</label>
                    <input type="number" id="max-price" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Prix Max">
                    </div>
                    <div>
                    <label for="id-number" class="block text-sm font-medium text-white-700">N° ID</label>
                    <input type="text" id="id-number" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-gray-500 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="N° ID">
                    </div>
                    <div class="flex items-end">
                    <button type="submit" class="w-full py-2 px-4 bg-red-600 text-white font-semibold rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Rechercher Un Bien</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
  <!-- Listings Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold text-center">Annonces d'appartements à louer au Bénin</h2>
        <p class="mt-4 text-center">À la recherche d'un appartement à louer au Bénin ? L'agence immobilière BENIN-IMMO vous aide à trouver le logement idéal.</p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <!-- Property Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/1.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/2.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/3.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/4.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/5.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/6.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/7.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/8.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/10.jpg')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/11.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/12.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/13.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/14.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/15.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location moderne appartement 3 chambres Akpakpa Cotonou</h3>
                    <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">350 000 FCFA / Mois</p>
                </div>
            </div>
            <!-- Property Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{asset('image/16.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">Appartement haut standing à louer Cotonou Fidjrossè</h3>
                <p class="text-gray-700">4 Beds • 3 Baths • 2000 sqft</p>
                <p class="text-gray-900 font-bold mt-2">400 000 FCFA / Mois</p>
            </div>
            </div>
            <!-- Property Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/17.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location appartement 3 chambres à Fidjrossè</h3>
                    <p class="text-gray-700">2 Beds • 2 Baths • 1200 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">200 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/18.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location appartement 3 chambres à Fidjrossè</h3>
                    <p class="text-gray-700">2 Beds • 2 Baths • 1200 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">200 000 FCFA / Mois</p>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{asset('image/19.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold">Location appartement 3 chambres à Fidjrossè</h3>
                    <p class="text-gray-700">2 Beds • 2 Baths • 1200 sqft</p>
                    <p class="text-gray-900 font-bold mt-2">200 000 FCFA / Mois</p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="#" class="bg-red-500 text-white py-2 px-4 rounded">Consulter plus d'annonces</a>
        </div>
        </div>
    </section>

    <!-- Additional Sections -->
    <section class="py-16 bg-gray-200">
        <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-semibold">Location appartements au Bénin sur BENIN-IMMO</h2>
        <p class="mt-4">Bienvenue chez BENIN-IMMO, votre partenaire de confiance pour la location d'appartements au Bénin.</p>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-semibold">Recherche immobilière au Bénin</h2>
        <p class="mt-4">Consultez nos dernières offres immobilières au Bénin pour trouver la propriété de vos rêves.</p>
        </div>
    </section>

@endSection