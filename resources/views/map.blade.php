<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Géolocalisation des Biens Immobiliers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Géolocalisation des Biens Immobiliers</h2>
        <div id="map"></div>
    </div>

    <script>
        async function geocodeAddress(address) {
            const response = await fetch(`https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(address)}&key=YOUR_API_KEY`);
            const data = await response.json();

            if (data.status === "OK") {
                return data.results[0].geometry.location;
            } else {
                throw new Error("Geocoding failed");
            }
        }

        async function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 48.8566, lng: 2.3522 },
                zoom: 12,
            });

            const properties = @json($properties);

            for (const property of properties) {
                try {
                    const location = await geocodeAddress(property.address);
                    const marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        title: property.name,
                    });

                    const infowindow = new google.maps.InfoWindow({
                        content: `<h3>${property.name}</h3><p>${property.address}</p>`,
                    });

                    marker.addListener("click", () => {
                        infowindow.open(map, marker);
                    });
                } catch (error) {
                    console.error(`Geocoding failed for address: ${property.address}`);
                }
            }
        }

        window.onload = initMap;
    </script>
</body>
</html>