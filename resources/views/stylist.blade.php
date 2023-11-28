<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
  {{--  <link rel="stylesheet" href="{{asset('css/style2.css')}}">  --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{asset('css/style1.css')}}">
<!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">

  <!-- Additional CSS Files -->
  {{--  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">  --}}
  <link rel="stylesheet" href="{{ asset('assets/css/templatemo-grad-school.css') }}">
  {{--  <link rel="stylesheet" href="{{ asset('assets/css/owl.css')}} ">  --}}
  {{--  <link rel="stylesheet" href="{{asset ('assets/css/lightbox.css')}} ">  --}}


  <title>Styliste</title>
</head>
@include ('nav')
<body>

    <section class="container10">
    </section>
    {{--
     <section class="destination">
      <h1 class="title">Nos Stylistes</h1>
        <div class="content">
          <div class="box">
            <img src="{{ asset('images/r1.webp') }}" alt="">
            <div class="content">
              <div>
                <h1>Ciseaux d'or</h1>
                <p>BOBO,belle ville</p>
                <a href="#">Lire plus</a>
              </div>
            </div>
        </div>
           <div class="box">
            <img src="{{ asset('images/enf4.jpg') }}" alt="">
            <div class="content">
              <div>
                <h1>Emperor Styliste</h1>
                <p>BOBO,belle ville</p>
                <a href="#">Lire plus</a>
              </div>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('images/r2.webp') }}" alt="">
            <div class="content">
              <div>
                <h1>Emperor Styliste</h1>
                <p>BOBO,belle ville</p>
                <a href="#">Lire plus</a>
              </div>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('images/r1.webp') }}" alt="">
            <div class="content">
              <div>
                <h1>Doigt magique</h1>
                <p>BOBO,belle ville</p>
                <a href="#">Lire plus</a>
              </div>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('images/r2.webp') }}" alt="">
            <div class="content">
              <div>
                <h1>Emperor Styliste</h1>
                <p>Koudougou,sect 02</p>
                <a href="#">Lire plus</a>
              </div>
            </div>
          </div>
          <div class="box">
            <img src="{{ asset('images/r1.webp') }}" alt="">
            <div class="content">
              <div>
                <h1>Doigt magique</h1>
                <p>Ouaga,Patte d'oie</p>
                <a href="#">Lire plus</a>
              </div>
            </div>
          </div>
        </div>
        </section><br><br><br>  --}}
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
                                <a href="/voir"><button class="btn btn-secondary">voir</button></a>  
                                       </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Styliste modéliste</p>
                            <p>BOBO,belle ville</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('images/r11.webp') }}" alt="">
                            <div class="team-social">
                                <a href=""><button class="btn btn-secondary">voir</button></a>  
                                       </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Yelemou Issa</h5>
                            <p class="m-0">Styliste modéliste</p>
                            <p>BOBO,belle ville</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('images/r11.webp') }}" alt="">
                            <div class="team-social">
                                <a href=""><button class="btn btn-secondary">voir</button></a>  
                                       </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Sawadogo Roméo</h5>
                            <p class="m-0">Styliste modélister</p>
                            <p>BOBO,belle ville</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('images/r11.webp') }}" alt="">
                            <div class="team-social">
                                <a href=""><button class="btn btn-secondary">voir</button></a>  
                                       </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Web Designer</p>
                            <p>BOBO,belle ville</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{asset('images/r11.webp')}}" alt="">
                            <div class="team-social">
                                <a href=""><button class="btn btn-secondary">voir</button></a>  
                                       </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Styliste modéliste</p>
                            <p>BOBO,belle ville</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('images/r11.webp') }}" alt="">
                            <div class="team-social">
                                <a href=""><button class="btn btn-secondary">voir</button></a>  
                                       </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Yelemou Issa</h5>
                            <p class="m-0">Styliste modéliste</p>
                            <p>BOBO,belle ville</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('images/r11.webp') }}" alt="">
                            <div class="team-social">
                     <a href=""><button class="btn btn-secondary">voir</button></a>  
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Sawadogo Roméo</h5>
                            <p class="m-0">Styliste modélister</p>
                            <p>BOBO,belle ville</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="{{ asset('images/r11.webp') }}" alt="">
                            <div class="team-social">
                                <a href=""><button class="btn btn-secondary">voir</button></a>  
                                       </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>Jhon Doe</h5>
                            <p class="m-0">Web Designer</p>
                            <p>BOBO,belle ville</p>

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



