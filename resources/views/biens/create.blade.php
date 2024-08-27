<html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de Biens Immobiliers de Luxe</title>
    <style>
        body {
            font-family: 'Helvetica Neue', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1, h2 {
            font-weight: 300;
            color: #2c3e50;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5em;
        }

        h2 {
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .form-navigation button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-navigation button[disabled] {
            background-color: #bdc3c7;
            cursor: not-allowed;
        }

        .form-navigation button:hover:not([disabled]) {
            background-color: #3498db;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Création de Biens Immobiliers de Luxe</h1>
        
        <form method="POST" action="{{route('biens-submit')}}" enctype="multipart/form-data">
            @csrf
            <!-- Étape 1: Informations Générales -->
            <div class="form-step active" id="step-1">
                <h2>Informations Générales</h2>

                <div class="form-group">
                    <label for="nom">Titre de la Publication</label>
                    <input type="text" id="nom" name="nom" required>
                </div>

                <div class="form-group">
                    <label for="adresse">Adresse du Bien</label>
                    <input type="text" id="adresse" name="adresse" required>
                </div>

                <div class="form-group">
                    <label for="type_id">Type de Bien</label>
                    <select id="type_id" name="type_id" required>
                        <option value="">Sélectionnez...</option>
                        @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->nom}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="superficie">Surface Habitable (en m²)</label>
                    <input type="number" id="superficie" name="superficie" required>
                </div>

                <div class="form-group">
                    <label for="statut">Statut</label>
                    <select id="statut" name="statut" required>
                        <option value="">Sélectionnez...</option>
                        <option value="Disponible">Disponible</option>
                        <option value="Indisponible">Indisponible</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" required></textarea>
                </div>

                <div class="form-navigation">
                    <button type="button" id="next-step-1">Suivant</button>
                </div>
            </div>

            <!-- Étape 2: Caractéristiques du Bien -->
            <div class="form-step" id="step-2">
                <h2>Caractéristiques du Bien</h2>

                <div class="form-group">
                    <label for="nombre_pieces">Nombre de Chambres</label>
                    <input type="number" id="nombre_pieces" name="nombre_pieces" required>
                </div>

                <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="number" id="prix" name="prix" required>
                </div>

                <div class="form-group">
                    <label for="salle_bains">Nombre de Salles de Bain</label>
                    <input type="number" id="salle_bains" name="salle_bains" required>
                </div>

                <div class="form-group">
                    <label for="ville_id">Ville</label>
                    <select id="ville_id" name="ville_id" required>
                        <option value="">Sélectionnez...</option>
                        @foreach($villes as $ville)
                            <option value="{{$ville->id}}">{{$ville->nom}}</option>
                        @endforeach
                        
                    </select>
                </div>

                <div class="form-navigation">
                    <button type="button" id="prev-step-2">Précédent</button>
                    <button type="button" id="next-step-2">Suivant</button>
                </div>
            </div>

            <!-- Étape 3: Équipements et Commodités -->
            <div class="form-step" id="step-3">
                <h2>Équipements et Commodités</h2>

                <div class="form-group">
                    <label for="piscine">Piscine</label>
                    <select id="piscine" name="piscine" required>
                        <option value="">Sélectionnez...</option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="garage">Garages</label>
                    <select id="garage" name="garage" required>
                        <option value="">Sélectionnez...</option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="meuble">Meublés</label>
                    <select id="meuble" name="meuble" required>
                        <option value="">Sélectionnez...</option>
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>
                </div>

                <div class="form-navigation">
                    <button type="button" id="prev-step-3">Précédent</button>
                    <button type="button" id="next-step-3">Suivant</button>
                </div>
            </div>

            <!-- Étape 4: Types de Publications et Uploads -->
            <div class="form-step" id="step-4">
                <h2>Types de Publications et Uploads</h2>

                <div class="form-group">
                    <label for="type">Type de Publication</label>
                    <select id="type" name="type" required>
                        <option value="">Sélectionnez...</option>
                        <option value="Vente">Vente</option>
                        <option value="Location">Location</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="document">Télécharger un Document (PDF)</label>
                    <input type="file" id="document" name="document" accept=".pdf" required>
                </div>

                <div class="form-group">
                    <label for="images">Télécharger des Images du Bien</label>
                    <input type="file" id="images" name="images[]" accept="image/*" multiple required>
                </div>

                <div class="form-navigation">
                    <button type="button" id="prev-step-4">Précédent</button>
                    <button type="submit">Soumettre</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        const steps = document.querySelectorAll('.form-step');
        const nextButtons = document.querySelectorAll('.form-navigation button[id^="next-step"]');
        const prevButtons = document.querySelectorAll('.form-navigation button[id^="prev-step"]');

        let currentStep = 0;

        nextButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                if (validateForm(steps[currentStep])) {
                    steps[currentStep].classList.remove('active');
                    currentStep++;
                    steps[currentStep].classList.add('active');
                }
            });
        });

        prevButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                steps[currentStep].classList.remove('active');
                currentStep--;
                steps[currentStep].classList.add('active');
            });
        });

        function validateForm(step) {
            const inputs = step.querySelectorAll('input, select');
            let valid = true;
            inputs.forEach(input => {
                if (!input.checkValidity()) {
                    input.reportValidity();
                    valid = false;
                }
            });
            return valid;
        }
    </script>

</body>
</html>
