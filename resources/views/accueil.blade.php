
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <!-- Favicon -->
  <link href="{{ asset('img/favicon.ico') }}" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
  <link rel="stylesheet" href="{{asset('product.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
<script src="https://kit.fontawesome.com/3477ae541c.js" crossorigin="anonymous"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
  <link rel="stylesheet" href="{{asset('css/blog.css')}}">
  {{--  <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel="stylesheet">  --}}
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
<link rel="stylesheet" href="{{asset('css/carousel.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesone/4.7.0.css/font-awesome.min.css">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/features/">

<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">
   {{--  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">  --}}
{{--  <link rel="stylesheet" href="{{asset('css/offcanvas-navbar.css')}}">  --}}
<link rel="stylesheet" href="{{ asset('assets/css/navbars.css') }}">
  <!-- Favicon -->
  <link href="{{asset('images/img/favicon.ico')}}" rel="icon">
  <!-- <link rel="stylesheet" href="{{asset('css/style1.css')}}"> -->

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap')}}" rel="stylesheet">

  <link href="{{asset('images/img/favicon.ico')}}" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/templatemo-grad-school.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
  <link rel="stylesheet" href="{{asset ('assets/css/lightbox.css') }}">
<!--

TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  <title>Accueil</title>
</head>
@include ('nav')
<body>
<section class="container2">
  <div class="text">
    <h1>Bienvenue dans <span>Styliste House</span></h1>
    <h2>Suivre la mode en temps réel</h2>
  </div>
    <div class="btn1">
      <a href="#"><span></span>Nous suivre</a>
    </div>
    </section><br><br>
  <div class="title-text">
    <p>CATALOGUES</p>
    <h3 class="text-center">Nous disposons plusieurs modèles qui va vous émerveillez</h3>
  </div>
  <section class="tenu">
    <div>
      <img src="{{ asset('images/r10.webp') }}" width="250" alt="">
    </div>
    <div class="tenu1">
      <h3> robe</h3>
      <p>avec du koko-donda</p>
      <p>Prix: <span>5$</span></p>
      <p>Taille: <span>M</span></p>
      <button class="btn btn-secondary" style="background: blue;">Acheté</button>
    </div>
    <div>
      <img src="{{ asset('images/r11.webp') }}" width="250" alt="">
    </div>
    <div class="tenu1">
      <h3> faso danfani</h3>
      <p>pour tout occasion</p>
      <p>Prix: <span>4000FR</span></p>
      <p>Taille: <span>Xl</span></p>
      <button class="btn btn-secondary" style="background: blue;">Acheté</button>
    </div>
  </section>
  <!-- <section class="tenu">
  <div>
      <img src="{{ asset('images/r8.webp') }}" width="300" alt="">
    </div>
    <div class="tenu1">
      <h3>chemise</h3>
      <p>Robe pour tous cérémonie</p>
      <p>Prix: <span>15000fr</span></p>
      <p>Taille: <span>Xl</span></p>
      <button class="btn btn-secondary" style="background: blue;">Voir plus</button>
    </div>
  </section> -->
  <section class="tenu">

    <div>
      <img src="{{ asset('images/r9.webp') }}" width="250" alt="">
    </div>
    <div class="tenu1">
      <h3>robe</h3>
      <p>fais à base du tissu koko-donda</p>
      <p>Prix: <span>5000FR</span></p>
      <p>Taille: <span>l</span></p>
      <button class="btn btn-secondary" style="background: blue;">Acheté</button>
    </div>
    <div>
      <img src="{{ asset('images/r11.webp') }}" width="250" alt="">
    </div>
    <div class="tenu1">
      <h3>Chemise</h3>
      <p>avec du tissu koko-donda</p>
      <p>Prix: <span>5$</span></p>
      <p>Taille: <span>xl</span></p>
      <button class="btn btn-secondary" style="background: blue;">Acheté</button>
    </div>
  </section>

  <section class="team">
    <div class="title-text">
      <p>COLLECTIONS</p>
      <h3>Admirez nos merveilles</h3>
    </div>
<div class="row">
  <div class="box">
    <div class="image">
      <img src="{{ asset('images/r1.webp') }}" alt="">
    </div>
  </div>
  <div class="box">
    <div class="image">
      <img src="{{ asset('images/r2.webp') }}" alt="">
    </div>
  </div>
  <div class="box">
    <div class="image">
      <img src="{{ asset('images/r3.webp') }}" alt="">
    </div>
  </div>
  <div class="box">
    <div class="image">
      <img src="{{ asset('images/r4.webp') }}" alt="">
    </div>

  </div>
  <a href="" class="b2">Découvrez plus</a>
</div>
  </section>
  <section class="team">
    <div class="row">
      <div class="box">
        <div class="image">
          <img src="{{ asset('images/r5.webp') }}" alt="">
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{ asset('images/r6.webp') }}" alt="">
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{ asset('images/r7.webp') }}" alt="">
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{ asset('images/r8.webp') }}" alt="">
        </div>
      </div>
    </div>
      </section>
      <a href="" class="text-center">Découvrez plus</a>

      <!-- About Start -->
      <div class="container-fluid py-5">
          <div class="container py-5">
              <div class="row align-items-center">
                  <div class="col-lg-5">
                      <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('images/img/about.jpg') }}" alt="">
                  </div>
                  <div class="col-lg-7">
                      <div class="text-left mb-4">
                          <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                          <h1>Styliste House</h1>
                      </div>
                      <p>Styliste House est une application web dédiée aux stylistes. Publiez vos modèles et interagissez avec d/'autres stylistes talentueux. Rejoignez notre communauté passionnée dès aujourd'hui !</p>
                      <p>Montrez votre créativité en publiant vos modèles sur Styliste House. Ajoutez des photos attrayantes, des descriptions détaillées et attirez l'attention des clients à la recherche de stylistes talentueux.</p>
                      <a href="{{ asset('register') }}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Inscrivez-vous maintenant</a>
                  </div>
              </div>
          </div>
      </div>
      <!-- About End -->
      {{--  <section class="feature">
        <div class="title-text">
          <p>PORTFOLIO</p>
          <h1>Le parcours du styliste</h1>
        </div>
        <div class="feature-box">
          <div class="features">
            <h1>Experienced Staff</h1>
            <div class="fetaures-desc">
            <div class="fetaures-icon">
              <i class="fa fa-shield"></i>
            </div>
            <div class="fetaures-text">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat reprehenderit laudantium, amet odit at, architecto cumque, officiis eveniet recusandae aliquam odio omnis incidunt voluptatem saepe <br> commodi modi nulla consequatur accusantium!</p>
            </div>
          </div>
          <h1>Experienced Staff</h1>
          <div class="fetaures-desc">
          <div class="fetaures-icon">
            <i class="fa fa-shield"></i>
          </div>
          <div class="fetaures-text">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat reprehenderit laudantium, amet odit at, architecto cumque, officiis eveniet recusandae aliquam odio omnis incidunt voluptatem saepe <br> commodi modi nulla consequatur accusantium!</p>
          </div>
        </div>
        <h1>Experienced Staff</h1>
        <div class="fetaures-desc">
        <div class="fetaures-icon">
          <i class="fa fa-shield"></i>
        </div>
        <div class="fetaures-text">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat reprehenderit laudantium, amet odit at, architecto cumque, officiis eveniet recusandae aliquam odio omnis incidunt voluptatem saepe <br> commodi modi nulla consequatur accusantium!</p>
        </div>
      </div>

        </div>
          <div class="features-img">
            <img src="{{ asset('images/r1.webp') }}" alt="">
          </div>
        </div>
       </section><br>  --}}
<!-- Team Start -->
<div class="container-fluid py-5">
  <div class="container pt-5 pb-3">
      <div class="text-center mb-5">
          <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Stylistes</h5>
          <h1>Rencontrez nos stylistes</h1>
      </div>
      <div class="row">
          <div class="col-md-6 col-lg-3 text-center team mb-4">
              <div class="team-item rounded overflow-hidden mb-2">
                  <div class="team-img position-relative">
                      <img class="img-fluid" src="{{asset('images/r11.webp')}}" alt="">
                      <div class="team-social">
                          <a class="btn btn-outline-light btn-square mx-1" href""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                  </div>
                  <div class="bg-secondary p-4">
                      <h5>Jhon Doe</h5>
                      <p class="m-0">Styliste modéliste</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-4">
              <div class="team-item rounded overflow-hidden mb-2">
                  <div class="team-img position-relative">
                      <img class="img-fluid" src="{{ asset('images/r11.webp') }}" alt="">
                      <div class="team-social">
                          <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                  </div>
                  <div class="bg-secondary p-4">
                      <h5>Yelemou Issa</h5>
                      <p class="m-0">Styliste modéliste</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-4">
              <div class="team-item rounded overflow-hidden mb-2">
                  <div class="team-img position-relative">
                      <img class="img-fluid" src="{{ asset('images/r11.webp') }}" alt="">
                      <div class="team-social">
                          <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                  </div>
                  <div class="bg-secondary p-4">
                      <h5>Sawadogo Roméo</h5>
                      <p class="m-0">Styliste modélister</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-4">
              <div class="team-item rounded overflow-hidden mb-2">
                  <div class="team-img position-relative">
                      <img class="img-fluid" src="{{ asset('images/r11.webp') }}" alt="">
                      <div class="team-social">
                          <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                      </div>
                  </div>
                  <div class="bg-secondary p-4">
                      <h5>Jhon Doe</h5>
                      <p class="m-0">Web Designer</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Team End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('js/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('js/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('js/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    {{--  <script src="{{asset('js/color-modes.js')}}"></script>  --}}
    <script src="{{asset('js/js/main.js')}}"></script>
        <script src="{{asset('js/offcanvas-navbar.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.')}}"></script>
        <script src="{{asset('js/index.js')}}"></script>
        <script src="{{asset('js/js/script.js')}}"></script>
        <script src="{{asset('js/https://unpkg.com/swiper@7/swiper-bundle.min.js')}}"></script>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('mail/contact.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <script src="{{ asset('assets/js/video.js') }}"></script>
    <script src="{{ asset('assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

        @include ('footer');
      </body>
      </html>

