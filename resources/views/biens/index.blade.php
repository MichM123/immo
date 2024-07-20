@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <section class="bg-cover bg-center h-96" style="background-image: url('{{asset('image/10.jpg')}}');">
    <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
      <div class="text-center text-white">
        <h2 class="text-4xl font-bold">Agence immobilière IMMOBENIN</h2>
        <p class="mt-4">Votre partenaire immobilier au Bénin</p>
        <a href="#" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded">Consulter les annonces</a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="py-16">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-semibold">Agence immobilière à Cotonou IMMOBENIN</h2>
      <p class="mt-4">Agence immobilière à Cotonou IMMOBENIN est votre spécialiste en immobilier au Bénin.</p>
      <img src="{{asset('image/1.webp')}}" alt="Image" class="mx-auto mt-4">
    </div>
  </section>

  <!-- Featured Properties -->
  <section class="py-16 bg-gray-200">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl font-semibold mb-4 text-center">À la UNE Coup de Cœur</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Property Card -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="{{asset('image/1.webp')}}" alt="Property Image" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold">Vente d'une Villa de 3 Chambres à Cotonou</h3>
            <p class="text-gray-700">3 Beds • 2 Baths • 1500 sqft</p>
            <p class="text-gray-900 font-bold mt-2">$1500/month</p>
          </div>
        </div>
        <!-- Repeat the property card for more listings -->
      </div>
      <div class="text-center mt-8">
        <a href="#" class="bg-red-500 text-white py-2 px-4 rounded">Voir Plus d'Annonces</a>
      </div>
    </div>
  </section>

  <!-- Additional Sections -->
  <section class="py-16">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-2xl font-semibold">Vous recherchez un appartement à louer à Cotonou ?</h2>
      <p class="mt-4">Nous avons une large gamme d'appartements disponibles à la location.</p>
      <img src="{{asset('image/7.webp')}}" alt="Appartement à louer" class="mx-auto mt-4">
      <a href="#" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded">Consulter les annonces</a>
    </div>
  </section>

  <section class="py-16 bg-gray-200">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-2xl font-semibold">Cherchez-vous une villa ou maison à vendre à Cotonou ?</h2>
      <p class="mt-4">BENIN-IMMO a une sélection de maisons et de villas disponibles à la vente.</p>
      <img src="{{asset('image/8.webp')}}" alt="Villa à vendre" class="mx-auto mt-4">
      <a href="#" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded">Consulter les annonces</a>
    </div>
  </section>

  <section class="py-16">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-2xl font-semibold">Réservez votre appartement meublé à Cotonou</h2>
      <p class="mt-4">Trouvez le confort d'un appartement meublé à Cotonou avec nos meilleures offres.</p>
      <img src="{{asset('image/14.webp')}}" alt="Appartement meublé" class="mx-auto mt-4">
      <a href="#" class="mt-4 inline-block bg-red-500 text-white py-2 px-4 rounded">Consulter les annonces</a>
    </div>
  </section>

  <!-- Blog Section -->
  <section class="py-16 bg-gray-200">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-2xl font-semibold mb-4">Quelques articles de notre blog</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Blog Post Card -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="{{asset('image/10.jpg')}}" alt="Blog Image" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold">Titre de l'article</h3>
            <p class="text-gray-700">Un bref aperçu de l'article.</p>
          </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="{{asset('image/11.webp')}}" alt="Blog Image" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold">Titre de l'article</h3>
            <p class="text-gray-700">Un bref aperçu de l'article.</p>
          </div>
        </div>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
          <img src="{{asset('image/12.webp')}}" alt="Blog Image" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-semibold">Titre de l'article</h3>
            <p class="text-gray-700">Un bref aperçu de l'article.</p>
          </div>
        </div>
        <!-- Repeat the blog post card for more posts -->
      </div>
    </div>
  </section>

@endSection