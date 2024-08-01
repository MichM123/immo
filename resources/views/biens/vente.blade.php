@extends('layouts.app')

@section('content')
    <section class="w-full p-8 bg-white shadow-md rounded-lg bg-cover bg-center h-96 relative" style="background-image: url('{{asset('image/12.webp')}}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </section>
  <!-- Listings Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold text-center">Annonces de biens à vendre au Bénin</h2>
        <p class="mt-4 text-center">À la recherche d'un bien à vendre au Bénin ? ImmoBenin vous aide à trouver le logement idéal.</p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <!-- Property Card -->
            @foreach($biens as $bien)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{asset('image/1.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold">{{$bien->nom}}</h3>
                        <p class="text-gray-700">{{$bien->nombre_pieces}} Beds • 2 Baths • 1500 sqft</p>
                        <p class="text-gray-900 font-bold mt-2">{{$bien->prix}} FCFA / Mois</p>
                    </div>
                </div>
            @endforeach
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
        </div>
    </section>
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section>
@endSection