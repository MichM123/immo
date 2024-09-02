@extends('layouts.app')

@section('content')
  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 text-center">
            <h2>immobilier B-Immo</h2>
            <p>Votre partenaire immobilier au Bénin</p>
            <a href="{{route('mes_biens')}}" class="btn-get-started">Consulter les annonces</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item">
        <img src="{{asset('image/8.webp')}}" alt="">
      </div>
      <div class="carousel-item active">
        <img src="{{asset('image/9.jpg')}}" alt="">
      </div>
      <div class="carousel-item">
        <img src="{{asset('image/10.jpg')}}" alt="">
      </div>
      <div class="carousel-item">
        <img src="{{asset('image/18.webp')}}" alt="">
      </div>
      <div class="carousel-item">
        <img src="{{asset('image/3.webp')}}" alt="">
      </div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- /Hero Section -->

  <section class="section novi-background section-md text-center">
    <div class="container">
      <h3 class="fw-bold wow-outer"><span class="wow slideInDown">Populaire en ce moment</span></h3>
      <div class="row row-lg-50 row-35 offset-top-2">
        @foreach ($biens as $bien)
          <div class="col-md-6 wow-outer">
            <!-- Post Modern-->
            <article class="post-modern wow slideInLeft">
              <a class="post-modern-media" href="#">
                @if($bien->images->count() > 0)
                  <div id="carousel{{ $bien->id }}" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                    <div class="carousel-inner">
                      @foreach($bien->images as $index => $image)
                        <div class="image-container carousel-item @if($index == 0) active @endif">
                          <div class="text-overlay">{{$bien->statut}}</div>
                          <img src="{{asset('storage/' . $image->url)}}" alt="" width="500" height="300"/>
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
              </a>
              <h4 class="post-modern-title"><a class="post-modern-title" href="#">{{$bien->nom}}</a></h4>
              <ul class="post-modern-meta">
                <li><a class="button-winona" href="#">$ {{$bien->prix}}</a></li>
                <li>{{$bien->superficie}} m²</li>
                <li>{{$bien->nombre_chambres}} chambre</li>
              </ul>
              <p>A comfortable residential property located in a quiet and cozy area.</p>
            </article>
          </div>
        @endforeach
        <div class="col-md-12 wow-outer"><a class="btn btn-primary button-winona btn-md" href="#">view More properties</a></div>
      </div>
    </div>
  </section>
  <section class="section novi-background section-lg bg-gray-100">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p class="text-base text-body-color dark:text-dark-6">
              Nous nous engageons à offrir un service sécurisé, rapide et efficace pour répondre à tous vos besoins immobiliers. Rejoignez-nous dès aujourd'hui et découvrez la facilité de gérer vos transactions immobilières en ligne.
            </p>
          </div><!-- End Section Title -->
        </div>
      </div>
      <div class="row row-30">
        <div class="col-sm-6 col-lg-4 wow-outer">
          <!-- Box Minimal-->
          <article class="box-minimal">
            <div class="box-chloe__icon novi-icon linearicons-user wow fadeIn"></div>
            <div class="box-minimal-main wow-outer">
              <h4 class="box-minimal-title wow slideInDown">Qualified Employees</h4>
              <p class="wow fadeInUpSmall">Pour ceux qui cherchent à louer ou acheter un bien, notre service de location offre une interface intuitive pour gérer vos annonces. Que vous soyez propriétaire d'un appartement, d'une maison ou d'un local commercial, vous pouvez atteindre des locataires potentiels en un clic.</p>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4 wow-outer">
          <!-- Box Minimal-->
          <article class="box-minimal">
            <div class="box-chloe__icon novi-icon linearicons-bubble-text wow fadeIn" data-wow-delay=".1s"></div>
            <div class="box-minimal-main wow-outer">
              <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".1s">Vente</h4>
              <p class="wow fadeInUpSmall" data-wow-delay=".1s">Vous souhaitez vendre votre bien immobilier ? Notre plateforme vous permet de publier facilement une annonce détaillée, d'inclure des photos attractives, et de toucher un large public d'acheteurs potentiels. Nous vous accompagnons dans chaque étape, de la mise en ligne de l'annonce à la finalisation de la vente.</p>
            </div>
          </article>
        </div>
        <div class="col-sm-6 col-lg-4 wow-outer">
          <!-- Box Minimal-->
          <article class="box-minimal">
            <div class="box-chloe__icon novi-icon linearicons-star wow fadeIn" data-wow-delay=".2s"></div>
            <div class="box-minimal-main wow-outer">
              <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".2s">Publications</h4>
              <p class="wow fadeInUpSmall" data-wow-delay=".2s">Vous êtes un professionnel de l'immobilier ou un particulier souhaitant diffuser une annonce ? Notre plateforme vous offre la possibilité de publier vos offres avec un accès à un large réseau de visiteurs. Grâce à nos outils de promotion et de visibilité, vos annonces bénéficient d'une mise en avant optimale pour attirer l'attention de l'audience cible.</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- Services-->
  <section class="section novi-background section-lg text-center">
    <div class="container">
      <h3 class="text-uppercase">Residential property categories</h3>
      <p><span class="text-width-1">At our agency, we work with various types of residential real estate property. You can find out more about our properties by browsing our website.</span></p>
      <div class="row row-35 row-xxl-70 offset-top-2">
        
          <div class="col-sm-6 col-lg-3">
          <!-- Thumbnail Light-->
          <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="images/service-thumbnail-1-270x300.jpg" alt="" width="270" height="300"/></a>
            <h4 class="thumbnail-light-title"><a href="#">nom</a></h4>
          </article>
        </div>
        <div class="col-md-12 wow-outer"><a class="button button-primary button-winona button-md" href="#">view all properties</a></div>
      </div>
    </div>
  </section>
  <section class="pb-12 pt-20 lg:pb-[90px] lg:pt-[120px]">
    
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 dark:bg-dark-2">
          <i class="fa fa-4x fa-heart text-warning mb-3 sr-icons"></i>
          <h4 class="mb-[14px] text-2xl font-semibold text-dark text-center dark:text-white">
              Achat/Location
            </h4>
            <p class="text-body-color dark:text-dark-6">
              Pour ceux qui cherchent à louer ou acheter un bien, notre service de location offre une interface intuitive pour gérer vos annonces. Que vous soyez propriétaire d'un appartement, d'une maison ou d'un local commercial, vous pouvez atteindre des locataires potentiels en un clic.
            </p>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div class="mb-9 rounded-[20px] bg-white p-10 shadow-2 hover:shadow-lg md:px-7 xl:px-10 dark:bg-dark-2">
            <div class="mb-8 flex h-[70px] w-[70px] items-center justify-center rounded-2xl">
            <i class="fa fa-4x fa-newspaper text-warning mb-3 sr-icons"></i>

            </div>
            <h4 class="mb-[14px] text-2xl font-semibold text-dark text-center dark:text-white">
              
            </h4>
            <p class="text-body-color dark:text-dark-6">
            Vous souhaitez vendre votre bien immobilier ? Notre plateforme vous permet de publier facilement une annonce détaillée, d'inclure des photos attractives, et de toucher un large public d'acheteurs potentiels. Nous vous accompagnons dans chaque étape, de la mise en ligne de l'annonce à la finalisation de la vente.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Featured Properties -->

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Testimonials</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 2,
                "spaceBetween": 20
              }
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{asset('client/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{asset('client/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{asset('client/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{asset('client/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="{{asset('client/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->

  <section id="recent-blog-posts" class="recent-blog-posts section">

    <div class="container section-title" data-aos="fade-up">
      <h2>Recent Blog Posts</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{asset('image/1.webp')}}" class="img-fluid" alt="">
              <span class="post-date">December 12</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{asset('image/7.webp')}}" class="img-fluid" alt="">
              <span class="post-date">July 17</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{asset('image/9.jpg')}}" class="img-fluid" alt="">
              <span class="post-date">September 05</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

      </div>

    </div>

  </section><!-- /Recent Blog Posts Section -->

@endSection                                                     