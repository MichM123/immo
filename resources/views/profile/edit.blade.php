<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Professionals Resume HTML Bootstrap Template | Smarteyeapps.com</title>

    <link rel="shortcut icon" href="{{ asset('user/images/fav.jpg') }}">
    <link rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/fontawsom-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.css') }}" />
    @vite('resources/css/app.css')

</head>

<body>
    <div class="profile-box container overcover">
        <div class="top-cover">
            <div class="covwe-inn">
                <div class="row no-margin">
                    <div class="col-md-3 img-c">
                        <img src="{{ asset('storage/' . Auth::user()->identite) }}" class="rounded-full" alt="">
                    </div>
                    <div class="col-md-9 tit-det">
                        <h2>{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo fuga libero vel inventore
                            quidem illo porro cum, magni ipsum maxime tempore iusto consectetur dolorem voluptatem
                            corporis dolores ad. Perferendis, debitis.</p>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#gallery" role="tab"
                    aria-controls="profile" aria-selected="false">Mes Biens</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row no-margin home-det">
                    <div class="col-md-4 big-img">

                        <h4 class="ltitle">Hobbies</h4>
                        <ul class="hoby row no-margin">
                            <li><i class="fas fa-pencil-alt"></i> <br> Writing</li>
                            <li><i class="fas fa-bicycle"></i> <br> Cycling</li>
                            <li><i class="fas fa-futbol"></i> <br> Football</li>
                            <li><i class="fas fa-film"></i><br> Movies</li>
                            <li><i class="fas fa-plane-departure"></i> <br>Travel</li>
                            <li><i class="fas fa-gamepad"></i> <br> Games</li>
                        </ul>
                        <h4 class="ltitle">Referencess</h4>

                        <div class="refer-cov">

                            <p><b>Jonney Smith</b> CEO Casinocarol</p>
                            <span>Phone : +00 890 1232 8767</span>
                        </div>
                        <div class="refer-cov">

                            <p> <b>Simon Shanu</b> System Administrator</p>
                            <span>Phone : +00 890 1232 8767</span>
                        </div>

                    </div>
                    <div class="col-md-8 home-dat">
                        <h2 class="rit-titl"> Skills</h2>

                        <div class="links">
                            <div class="row ">
                                <div class="col-xl-6 col-md-12">
                                    <ul class="btn-link">
                                        <li>
                                            <a href=""><i class="fas fa-paper-plane"></i> Hire Me</a>
                                        </li>
                                        <li>
                                            <a href=""><i class="fas fa-cloud-download-alt"></i> Download
                                                Resume</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-md-12">
                                    <ul class="social-link">
                                        <li><i class="fab fa-facebook-f"></i></li>
                                        <li><i class="fab fa-twitter"></i></li>
                                        <li><i class="fab fa-pinterest-p"></i></li>
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                        <li><i class="fab fa-youtube"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="jumbo-address">
                            <div class="row no-margin">
                                <div class="col-lg-6 no-padding">

                                    <table class="addrss-list">
                                        <tbody>
                                            <tr>
                                                <th>Position</th>
                                                <td>Freelance</td>
                                            </tr>
                                            <tr>
                                                <th>Nationality</th>
                                                <td>American</td>
                                            </tr>
                                            <tr>
                                                <th>Date of birth</th>
                                                <td>09-06-1989</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6 no-padding">
                                    <table class="addrss-list">
                                        <tbody>
                                            <tr>
                                                <th>Experiance</th>
                                                <td>5+ Years</td>
                                            </tr>
                                            <tr>
                                                <th>Website</th>
                                                <td>www.yourdomain.com</td>
                                            </tr>
                                            <tr>
                                                <th>Languages</th>
                                                <td>English,French,Germany</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade exp-cover" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="data-box">
                    <div class="sec-title">
                        <h2>My Profile</h2>
                    </div>
                    <div class="row">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                    <div class="row">
                        @include('profile.partials.update-password-form')
                    </div>
                    <div class="row">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
            <div class="tab-pane fade gallcoo" id="gallery" role="tabpanel" aria-labelledby="contact-tab">

                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ route('biens') }}" class="btn btn-primary">Ajouter un bien</a>
                    </div>
                </div>
                <div class="row">
                    @if ($biens->isEmpty())
                        <p>Vous n'avez aucune publication</p>
                    @else
                        @foreach ($biens as $bien)
                            <div class="col-sm-4 p-2">
                                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                                    @if ($bien->images->count() > 0)
                                        <div id="carousel{{ $bien->id }}" class="carousel slide"
                                            data-bs-ride="carousel" data-bs-interval="5000">
                                            <div class="carousel-inner">
                                                @foreach ($bien->images as $index => $image)
                                                    <div
                                                        class="carousel-item @if ($index == 0) active @endif">
                                                        <img src="{{ asset('storage/' . $image->url) }}"
                                                            class="d-block w-100" alt="">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carousel{{ $bien->id }}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carousel{{ $bien->id }}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    @endif
                                    <div class="p-4">
                                        <h3 class="h5">{{ $bien->nom }}</h3>
                                        <p class="text-muted">{{ $bien->nombre_pieces }} Beds • 2 Baths • 1500
                                            sqft</p>
                                        <p class="fw-bold">{{ $bien->prix }} FCFA / Mois</p>
                                        <p>{{ $bien->description }}</p>
                                        <div class="card-footer text-start">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <a href="{{ route('biens.edit', $bien->id) }}"
                                                        class=" btn btn-primary">Update</a>
                                                </div>
                                                <div class="col-md-3">
                                                    <form action="" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                            data-id="{{ $bien->id }}">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>


            <!-- Modal de confirmation de suppression -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Confirmation de suppression</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Êtes-vous sûr de vouloir supprimer ce bien ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            {{-- <form id="deleteForm" action="{{route('delete', $biens)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form> --}}
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#deleteModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget) // Bouton qui a déclenché le modal
                    var bienId = button.data('id') // Extraire l'information des attributs data-*
                    var form = $('#deleteForm')
                    form.attr('action', '/biens/' + bienId)
                })
            </script>
        </div>
    </div>
    </div>
    <script>
        document.getElementById('dropdownButton').addEventListener('click', function() {
            var menu = document.getElementById('dropdownMenu');
            menu.classList.toggle('hidden');
        });

        window.addEventListener('click', function(e) {
            var menu = document.getElementById('dropdownMenu');
            var button = document.getElementById('dropdownButton');
            if (!button.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>

<script src="{{ asset('user/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('user/js/popper.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/js/script.js') }}"></script>

</html>
