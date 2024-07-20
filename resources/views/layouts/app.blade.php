<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ouest France Immo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white py-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-lg font-bold">
                ouestfrance-immo.com
            </div>
            <div>
                <a href="#" class="text-blue-500">Déposez votre annonce</a>
                <a href="#" class="ml-4 text-blue-500">Mon compte</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-white py-8">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold mb-4">Trouvez le bien de vos rêves</h1>
            <p class="mb-4">Parmi nos 200,893 annonces immobilières</p>
            <div class="bg-gray-100 p-4 rounded-lg shadow-md inline-block">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label for="type" class="block mb-2">Type</label>
                        <select id="type" class="w-full p-2 border rounded">
                            <option value="achat">Achat</option>
                            <option value="location">Location</option>
                        </select>
                    </div>
                    <div>
                        <label for="localisation" class="block mb-2">Où ?</label>
                        <input type="text" id="localisation" class="w-full p-2 border rounded" placeholder="Ville, code postal ou département">
                    </div>
                    <div>
                        <label for="prix" class="block mb-2">Prix</label>
                        <input type="text" id="prix" class="w-full p-2 border rounded" placeholder="Prix max">
                    </div>
                    <div class="flex items-end">
                        <button class="bg-blue-500 text-white p-2 rounded w-full">Rechercher</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Annonces Immobilières -->
    <section class="py-8">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Nos biens immobiliers</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Example property card -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="https://via.placeholder.com/300x200" alt="Property Image" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-lg font-bold">Appartement à Rennes</h3>
                    <p class="text-gray-600">T3 - 75m² - 3 pièces</p>
                    <p class="text-blue-500 font-bold">230,000 €</p>
                </div>
                <!-- Add more property cards as needed -->
            </div>
        </div>
    </section>

    <!-- Immobilier dans les grandes villes de l'Ouest -->
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">L'immobilier dans les grandes villes de l'Ouest</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center">
                    <h3 class="text-lg font-bold">Immobilier Brest</h3>
                    <ul class="text-gray-600">
                        <li>Prix m² appartement</li>
                        <li>Prix m² maison</li>
                        <li>Estimation immobilière</li>
                        <li>Quartier et centre-ville</li>
                        <li>Immobilier neuf</li>
                    </ul>
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-bold">Immobilier Caen</h3>
                    <ul class="text-gray-600">
                        <li>Prix m² appartement</li>
                        <li>Prix m² maison</li>
                        <li>Estimation immobilière</li>
                        <li>Quartier et centre-ville</li>
                        <li>Immobilier neuf</li>
                    </ul>
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-bold">Immobilier Rouen</h3>
                    <ul class="text-gray-600">
                        <li>Prix m² appartement</li>
                        <li>Prix m² maison</li>
                        <li>Estimation immobilière</li>
                        <li>Quartier et centre-ville</li>
                        <li>Immobilier neuf</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Guides et Accompagnements -->
    <section class="py-8">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Ouestfrance-immo.com vous guide</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="text-center bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Déjà 6000 avis</h3>
                </div>
                <div class="text-center bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Estimation</h3>
                </div>
                <div class="text-center bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Prix de l'immobilier</h3>
                </div>
                <div class="text-center bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Annuaire</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Accompagnement -->
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Ouestfrance-immo.com vous accompagne</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Une Question immo ?</h3>
                    <p class="text-gray-600">Contactez nos experts pour répondre à toutes vos questions immobilières.</p>
                    <a href="#" class="text-blue-500">Découvrir ></a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Estimez vos mensualités de prêt immobilier</h3>
                    <p class="text-gray-600">Simulez votre financement gratuitement.</p>
                    <a href="#" class="text-blue-500">Simuler ></a>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">Investir dans un appartement neuf à Nantes</h3>
                    <p class="text-gray-600">Découvrez les programmes immobiliers neufs à Nantes.</p>
                    <a href="#" class="text-blue-500">Découvrir ></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Immobilier des départements de l'Ouest -->
    <section class="py-8">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-4">Immobilier des départements de l'Ouest</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">IMMOBILIER ILLE-ET-VILAINE (35)</h3>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">IMMOBILIER MORBIHAN (56)</h3>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">IMMOBILIER LOIRE-ATLANTIQUE (44)</h3>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">IMMOBILIER VENDÉE (85)</h3>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">IMMOBILIER CALVADOS (14)</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-8">
        <div class="container mx-auto text-white">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <h3 class="text-lg font-bold mb-2">Annonces immo Ouest</h3>
                    <ul>
                        <li>Immobilier Bretagne</li>
                        <li>Immobilier Normandie</li>
                        <li>Immobilier Loire Atlantique</li>
                        <li>Immobilier Vendée</li>
                        <li>Immobilier Particulier</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-2">Locations immobilières</h3>
                    <ul>
                        <li>Location Appartement</li>
                        <li>Location Maison</li>
                        <li>Location Studio</li>
                        <li>Location par Ville</li>
                        <li>Location par Quartier</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-2">Portail de Groupe</h3>
                    <ul>
                        <li>Annonces Voiture occasion</li>
                        <li>Annonces Motos</li>
                        <li>Voitures Neuves</li>
                        <li>Brevets & Locaux</li>
                    </ul>
                </div>
            </div>
            <div class="mt-6 text-center">
                <p>&copy; 2024 Media Ouest France - Tous droits réservés</p>
            </div>
        </div>
    </footer>
</body>

</html>
