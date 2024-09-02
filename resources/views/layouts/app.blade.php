<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>ImmoBenin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @vite('resources/css/app.css')
    <!-- Favicons -->
    <link href="{{ asset('client/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('client/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('client/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('client/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('client/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('client/css/main.css') }}" rel="stylesheet">
</head>
    <style>
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 515px;
            z-index: 1;
            background-color: rgba(0,0,0,0.75);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .post-modern {
	        text-align: left;
        }

        .post-modern-title {
            color: #151515;
            font-weight: 400;
        }

        .post-modern-title a:hover {
            color: #007bff;
        }

        .post-modern-media {
            position: relative;
            display: block;
        }

        .post-modern-media::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(73, 80, 87, 0.4);
            transition: .22s ease-in-out;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .post-modern-media img {
            width: 100%;
        }

        .post-modern-media:hover::before {
            opacity: 1;
            visibility: visible;
        }

        .post-modern-meta {
            transform: translate3d(0, -5px, 0);
            margin-bottom: -5px;
            margin-left: -15px;
            margin-right: -15px;
            color: #495057;
            font-weight: 500;
        }

        .post-modern-meta > * {
            margin-top: 5px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .post-modern-meta > li {
            position: relative;
            display: inline-block;
            line-height: 24px;
            font-size: 18px;
        }

        .post-modern-meta > li:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            width: 1px;
            height: 1.5em;
            background: #e8e9ee;
            transform: translate3d(0, -50%, 0);
        }

        .post-modern-meta a:hover {
            color: #343db0;
        }

        .post-modern-meta + p {
            color: #151515;
        }

        * + .post-modern-title {
            margin-top: 9px;
        }

        * + .post-modern-meta {
            margin-top: 10px;
        }

        @media (max-width: 575.98px) {
            .post-modern {
                max-width: 430px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media (min-width: 768px) {
            .post-modern-meta {
                transform: translate3d(0, -5px, 0);
                margin-bottom: -5px;
                margin-left: -20px;
                margin-right: -20px;
            }
            .post-modern-meta > * {
                margin-top: 5px;
                padding-left: 20px;
                padding-right: 20px;
            }
            * + .post-modern-title {
                margin-top: 15px;
            }
        }

        @media (min-width: 992px) and (max-width: 1199.98px) {
            .post-modern-meta {
                margin-left: -15px;
                margin-right: -15px;
                font-size: 14px;
            }
            .post-modern-meta > * {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        @media (min-width: 1200px) {
            * + .post-modern-title {
                margin-top: 25px;
            }
            * + .post-modern-meta {
                margin-top: 15px;
            }
        }
        .wow-outer {
            position: relative;
            overflow: hidden;
        }
        .swiper-slider-business .wow-outer {
            white-space: normal;
        }

        .swiper-slider-business .wow-outer span {
            display: inline-block;
        }
        .wow-outer .object-inline span {
            display: inline-block;
        }
        .wow-outer span {
            display: block;
        }

        .wow-outer .wow > span {
            display: inline;
        }
        @keyframes fadeSlideInDown {
            0% {
                opacity: 0;
                transform: translate3d(0, -50%, 0);
                visibility: visible;
            }
            10% {
                opacity: 1;
            }
            100% {
                transform: translate3d(0, 0, 0);
            }
        }

        .fadeSlideInDown {
            animation-name: fadeSlideInDown;
        }
        .box-minimal > * {
            margin-left: 15px;
        }
        .box-minimal {
            display: flex;
            margin-left: -15px;
            text-align: left;
        }
        .box-chloe__icon {
            font-size: 26px;
        }
        .linearicons-user:before {
            content: "\ea1e";
        }

        .linearicons-user-plus:before {
            content: "\ea1f";
        }

        .linearicons-user-minus:before {
            content: "\ea20";
        }

        .linearicons-user-lock:before {
            content: "\ea21";
        }

        .linearicons-users:before {
            content: "\ea22";
        }

        .linearicons-users2:before {
            content: "\ea23";
        }

        .linearicons-users-plus:before {
            content: "\ea24";
        }

        .linearicons-users-minus:before {
            content: "\ea25";
        }
        .linearicons-star:before {
            content: "\e98d";
        }

        .linearicons-star-half:before {
            content: "\e98e";
        }

        .linearicons-star-empty:before {
            content: "\e98f";
        }
        .linearicons-bubble-text:before {
            content: "\eadb";
        }
        .button-winona {
            position: relative;
            overflow: hidden;
            display: inline-block;
            vertical-align: middle;
            text-align: center;
        }
        .thumbnail-light-media {
            position: relative;
            overflow: hidden;
            display: block;
            border-radius: 6px;
        }

        .thumbnail-light-media::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(73, 80, 87, 0.3);
            transition: .22s ease-in-out;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .thumbnail-light-media:hover::before {
            opacity: 1;
            visibility: visible;
        }
        .thumbnail-light {
            text-align: left;
        }

        .thumbnail-light-title {
            color: #151515;
        }

        .thumbnail-light-title a {
            color: inherit;
        }

        .thumbnail-light-title a:hover {
            color: #007bff;
        }
    </style>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{route('home')}}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">B-Immo</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}" class="active">Accueil</a></li>
                    <li><a href="{{ route('mes_biens') }}">Biens</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('publier') }}">Publier</a></li>
                    @guest
                        <li><a href="{{ route('login') }}">Se connecter</a></li>
                    @endguest
                    @auth
                        <li class="nav-item dropdown pe-3">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                                data-bs-toggle="dropdown">
                                <img src="{{ asset('storage/' . Auth::user()->identite) }}" alt="Profile"
                                    class="h-12 w-12 rounded-circle">
                                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->nom }}
                                    {{ Auth::user()->prenom }}</span>
                            </a><!-- End Profile Iamge Icon -->
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
                                        <span><i class="bi bi-person"></i> My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit dropdown-item d-flex align-items-center">
                                            <span><i class="bi bi-box-arrow-right"></i> Log Out</span>
                                        </button>

                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{route('home')}}" class="logo d-flex align-items-center">
                    <span class="">ImmoBenin</span>
                </a>
            </div>
            <div class="footer-contact pt-3">
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
                <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
                <footer id="footer" class="footer dark-background">

                    <div class="container footer-top">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-md-6 footer-about">
                                <a href="index.html" class="logo d-flex align-items-center">
                                    <span class="sitename">ImmoBenin</span>
                                </a>
                                <div class="footer-contact pt-3">
                                    <p>A108 Adam Street</p>
                                    <p>New York, NY 535022</p>
                                    <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                                </div>
                                <div class="social-links d-flex mt-4">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Services</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>Our Services</h4>
                                <ul>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">Product Management</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>Hic solutasetp</h4>
                                <ul>
                                    <li><a href="#">Excepturi dignissimos</a></li>
                                    <li><a href="#">Suscipit distinctio</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-2 col-md-3 footer-links">
                                <h4>Nobis illum</h4>
                                <ul>
                                    <li><a href="#">Ipsam</a></li>
                                    <li><a href="#">Laudantium dolorum</a></li>
                                    <li><a href="#">Dinera</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="container copyright text-center mt-4">
                        <p>© <span>Copyright</span> <strong class="px-1 sitename">ImmoBenin</strong> <span>All Rights
                                Reserved</span></p>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you've purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>

                </footer>

            <!-- Scroll Top -->
            <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

            <!-- Preloader -->
            <div id="preloader"></div>

            <!-- Vendor JS Files -->
            <script src="{{ asset('client/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('client/vendor/php-email-form/validate.js') }}"></script>
            <script src="{{ asset('client/vendor/aos/aos.js') }}"></script>
            <script src="{{ asset('client/vendor/glightbox/js/glightbox.min.js') }}"></script>
            <script src="{{ asset('client/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
            <script src="{{ asset('client/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('client/vendor/swiper/swiper-bundle.min.js') }}"></script>
            <script src="{{ asset('client/vendor/purecounter/purecounter_vanilla.js') }}"></script>

            <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">ImmoBenin</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
            </div>

        </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('client/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('client/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('client/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('client/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('client/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ asset('client/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('client/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('client/vendor/purecounter/purecounter_vanilla.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('client/js/main.js')}}"></script>
   <script>
        document.getElementById('next-step-1').addEventListener('click', function() {
            document.getElementById('step-1').classList.remove('active');
            document.getElementById('step-2').classList.add('active');
        });

        document.getElementById('prev-step-2').addEventListener('click', function() {
            document.getElementById('step-2').classList.remove('active');
            document.getElementById('step-1').classList.add('active');
        });

        document.getElementById('next-step-2').addEventListener('click', function() {
            document.getElementById('step-2').classList.remove('active');
            document.getElementById('step-3').classList.add('active');
        });

        document.getElementById('prev-step-3').addEventListener('click', function() {
            document.getElementById('step-3').classList.remove('active');
            document.getElementById('step-2').classList.add('active');
        });

        document.getElementById('luxury-property-form').addEventListener('submit', function(event) {
            alert('Formulaire soumis avec succès!');
            event.preventDefault(); // Pour éviter la soumission réelle pour l'exemple
        });
    </script>
    <!-- Main JS File -->

</body>

</html>
