@extends('layouts.app')

@section('content')
    <section class="w-full p-8 bg-white shadow-md rounded-lg bg-cover bg-center h-96 relative" style="background-image: url('{{asset('image/12.webp')}}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class=" text-center text-white p-8">
                <form class="pt-4 mt-5 space-y-4" method="get" action="{{route('mes_biens')}}">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                        <label for="type_id" class="mt-1 block text-sm font-medium text-black-500">Type</label>
                        <select id="type_id" class="mt-1 text-black block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option class="text-black">Types</option>
                            @foreach($types as $type)
                                <option value="{{$type->id}}" class="text-black">{{$type->nom}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div>
                        <label for="type_annonces" class="mt-1 block text-sm font-medium text-black-200">Catégorie</label>
                        <select id="type_annonces" class="mt-1 block text-black w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>Catégories</option>
                            <option>Vente</option>
                            <option>Location</option>
                        </select>
                        </div>
                        <div>
                        <label for="ville_id" class="mt-1 block text-sm font-medium text-black-200">Ville</label>
                        <select id="ville_id" class="mt-1 text-black block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>Villes</option>
                            @foreach($villes as $ville)
                                <option value="{{$ville->id}}">{{$ville->nom}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div>
                            <label for="prix_min" class="block text-sm font-medium text-white-500">Prix Min</label>
                            <input type="number" id="prix_min" value ="{{ request('prix_min')}}" class="mt-1 text-black block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Prix Min">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        
                        <div>
                        <label for="prix_max" class="block text-sm font-medium text-white-200">Prix Max</label>
                        <input type="number" id="prix_max" value ="{{ request('prix_max')}}" class="mt-1 text-black block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Prix Max">
                        </div>
                        <div>
                        <label for="superficie_min" class="block text-sm font-medium text-white-200">Superficie</label>
                        <input type="number" id="superficie_min" value ="{{ request('superficie_min')}}" class="mt-1 text-black block w-full py-2 px-3 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="N° ID">
                        </div>
                        <div class="flex items-end">
                        <button type="submit" class="w-full py-2 px-4 bg-red-600 text-white font-semibold rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Rechercher Un Bien</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="blog-posts" class="blog-posts section">
        <div class="container">
            <div class="row gy-4">
                @foreach($biens as $bien)
                    <div class="col-lg-4">
                        <article>
                            <div class="post-img">
                                @if($bien->images->count() > 0)
                                    <div id="carousel{{ $bien->id }}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                                        <div class="carousel-inner">
                                        @foreach($bien->images as $index => $image)
                                            <div class="image-container carousel-item @if($index == 0) active @endif">
                                            <div class="text-overlay">{{$bien->statut}}</div>
                                            <img src="{{asset('storage/' . $image->url)}}" alt="" class="img-fluid">
                                            </div>
                                        @endforeach
                                        </div>         
                                        <a class="carousel-control-prev" href="#hero-carousel{{ $bien->id }}" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                                        </a>

                                        <a class="carousel-control-next" href="#hero-carousel{{ $bien->id }}" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                @endif
                            </div>
                            <p class="post-category">{{Auth::user()->profession}}</p>
                            <h2 class="title">
                            <a href="blog-details.html">{{$bien->nom}}</a>
                            </h2>
                            <div class="d-flex align-items-center">
                            <img src="{{asset('image/2.webp')}}" alt="" class="img-fluid post-author-img flex-shrink-0">
                            <div class="post-meta">
                                <p class="post-author">{{Auth::user()->nom}} {{Auth::user()->prenom}}</p>      
                                <time datetime="2022-01-01">Jan 1, 2022</time>
                            </div>
                            </div>
                        </article>
                    </div><!-- End post list item -->
                @endforeach
            </div>
        </div>
    </section><!-- /Blog Posts Section -->

  <!-- Listings Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold text-center">Annonces de tous les types au Bénin</h2>
        <p class="mt-4 text-center fw-bold">À la recherche d'un appartement à louer oou à vendre au Bénin ? ImmoBenin vous aide à trouver le logement idéal.</p>
        
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