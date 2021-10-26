<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Home</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
  <link rel="stylesheet" href="{{asset('inicios/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('inicios/css/fonts.css')}}">
  <link rel="stylesheet" href="{{asset('inicios/css/style.css')}}">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>

<body>
  <!-- <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div> -->
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div>
  <div class="page">
    <!-- Page Header-->
    <!-- <a class="banner banner-top"
      href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"><img
        src="images/intense_02.jpg" alt="" /></a> -->
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
          data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
          data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse">
            <span></span>
          </div>
          <div class="rd-navbar-aside-outer">
            <div class="rd-navbar-aside">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand">
                  <!--Brand--><a class="brand" href="index.html"><img src="images/sider.png" alt="" width="225"
                      height="18" /></a>
                </div>
              </div>
              <div class="rd-navbar-aside-right rd-navbar-collapse">
                <ul class="rd-navbar-corporate-contacts">
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                      <div class="unit-body">
                        <p>AT:09:00<span>am</span> — 05:00<span>pm</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                      <div class="unit-body"><a class="link-phone" href="tel:#">+51 943529504</a></div>
                    </div>
                  </li>
{{-- aquiiii --}}
                  <li>
                    <div class="unit unit-spacing-xs">

                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                      {{-- <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                      <div class="unit-body"><a class="link-phone" href="tel:#">+51 943529504</a></div> --}}
                    </div>
                  </li>

                 
  
                </ul>
              </div>
            </div>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <div class="rd-navbar-nav-wrap">
                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="{{route('inicios.index')}}">Inicio</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('inicios.nosotro')}}">Nosotros</a>
                  </li>
                  <!--   <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                  </li> -->
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('inicios.contactano')}}">Contactanos</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2"
      data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
      <div class="swiper-wrapper text-left">
        <div class="swiper-slide context-dark" data-slide-bg="{{asset('inicios/images/capacitacion.jpg')}}">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h3 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"
                    style="color: rgb(46, 179, 184)" ;>Preparación
                    Continua</h3>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                    <span>Enseñanza y </span><span class="font-weight-bold" style="color: rgb(5, 5, 5)"
                      ;>Excelencia</span>
                  </h2>
                  <!-- <a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft"
                    data-caption-delay="0">Get in touch</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="{{asset('inicios/images/fondo.jpg')}}">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h4 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"
                    style="color: rgb(46, 179, 184)" ;>
                    No hay nada más fuerte en el mundo que </h4>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                    <span style="color: #fff" ;>el corazón de un </span><span style="color: rgb(0, 0, 0)" ;
                      class="font-weight-bold">Voluntario</span>
                  </h2>
                  <!-- <a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft"
                    data-caption-delay="0">Get in touch</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="{{asset('inicios/images/ts.jpg')}}">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-md-10">
                  <h3 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"
                    style="color: rgb(46, 179, 184)" ;>
                    Becas Integrales
                  </h3>
                  <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100">
                    <span>Para Jóvenes con Deseo de </span><span class="font-weight-bold"
                      style="color: rgb(46, 179, 184)" ;>Superación </span>
                  </h2>
                  <!-- <a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft"
                    data-caption-delay="0">Get in touch</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination"></div>
    </section>
    <!-- Section Box Categories-->
    <section class="section section-lg section-top-1 bg-gray-4">
      <div class="container offset-negative-1">
        <div class="box-categories cta-box-wrap">
          <div class="box-categories-content">
            <div class="row justify-content-center">
              <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="#"><img src="{{asset('inicios/images/arbol.jpg')}}" alt="" width="368" height="420" /></a>
                    <h5 class="box-categories-title">Sembrando Vidas</h5>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="#"><img src="{{asset('inicios/images/Voluntarios.jpg')}}" alt="" width="368" height="420" /></a>
                    <h5 class="box-categories-title">Orientación Vocacional</h5>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                <ul class="list-marked-2 box-categories-list">
                  <li><a href="#"><img src="{{asset('inicios/images/technical.jpg')}}" alt="" width="368" height="420" /></a>
                    <h5 class="box-categories-title">Technical School</h5>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- <a class="link-classic wow fadeInUp" href="#">Other Tours<span></span></a> -->
        <!-- Owl Carousel-->
      </div>
    </section>

    <!--	Our Services-->
    <section class="section section-sm">
      <div class="container">
        <h3>CAMPAÑA NAVIDEÑA</h3>
        <div class="row row-30">
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#">Wide Variety of Tours</a></h5>
                  <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations
                    all over the globe.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#">Wide Variety of Tours</a></h5>
                  <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations
                    all over the globe.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#">Wide Variety of Tours</a></h5>
                  <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations
                    all over the globe.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#">Wide Variety of Tours</a></h5>
                  <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations
                    all over the globe.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#">Wide Variety of Tours</a></h5>
                  <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations
                    all over the globe.</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4">
            <article class="box-icon-classic">
              <div
                class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                <div class="unit-left">
                  <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                </div>
                <div class="unit-body">
                  <h5 class="box-icon-classic-title"><a href="#">Wide Variety of Tours</a></h5>
                  <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations
                    all over the globe.</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- Responsabilidad Social-->
    <section class="section section-sm">
      <div class="container">
        <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Responsables — Una
            Misión</span></h3>
        <div class="row row-30 justify-content-center box-ordered">
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles"
                    src="{{asset('inicios/images/Jorgito.jpg')}}" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70"
                  xml:space="preserve">
                  <g>
                    <path fill="#161616"
                      d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Jorge Castillo</a></h6>
                <p class="team-modern-status">Gerente de Responsabilidad Social</p>
                <h6 class="team-modern-phone"><a href="tel:#">+51 943-750-857 </a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles"
                    src="{{asset('inicios/images/aracely.jpeg')}}" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70"
                  xml:space="preserve">
                  <g>
                    <path fill="#161616"
                      d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Aracely Cueva</a></h6>
                <p class="team-modern-status">Coordinadora de Responsabilidad Social</p>
                <h6 class="team-modern-phone"><a href="tel:#">+51 943-770-691</a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles"
                    src="{{asset('inicios/images/pame.jpg')}}" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70"
                  xml:space="preserve">
                  <g>
                    <path fill="#161616"
                      d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Pamela Broncano</a></h6>
                <p class="team-modern-status">Aprendiz Technical School</p>
                <h6 class="team-modern-phone"><a href="tel:#">+51 932-097-307</a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles"
                    src="{{asset('inicios/images/juli.jpg')}}" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70"
                  xml:space="preserve">
                  <g>
                    <path fill="#161616"
                      d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Julissa Acuña</a></h6>
                <p class="team-modern-status">Aprendiz Technical School</p>
                <h6 class="team-modern-phone"><a href="tel:#">+51 902 591 498</a></h6>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Subscribe-->
    <section class="section bg-default text-center offset-top-50">
      <div class="parallax-container" data-parallax-img="images/siderperu.jpg">
        <div class=" parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
          <div class="container">
            <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">En
                SIDERPERU</span><span class="d-block font-weight-light">seguimos
                construyendo</span></h2>
            <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s"> los sueños de todos los
              peruanos. Por eso, reafirmamos nuestro compromiso de ser tu
              mejor aliado para que cada uno de tus planes se haga realidad</p>
            <!-- <a
              class="button button-secondary button-pipaluk" href="#"></a> -->
          </div>
        </div>
      </div>
    </section>
    <!--	Instagrram wondertour-->
    <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
      <div class="container-fluid">
        <h6 class="gallery-title">Proyectos</h6>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3"
          data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0"
          data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{asset('inicios/images/gallery-image-1-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="images/gallery-image-1-1200x800-original.jpg" data-lightgallery="item"><img
                  src="{{asset('inicios/images/gallery-image-1-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{asset('inicios/images/gallery-image-2-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="images/gallery-image-2-1200x800-original.jpg" data-lightgallery="item"><img
                  src="{{asset('inicios/images/gallery-image-2-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{asset('inicios/images/gallery-image-3-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="images/gallery-image-3-1200x800-original.jpg" data-lightgallery="item"><img
                  src="{{asset('inicios/images/gallery-image-3-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{asset('inicios/images/gallery-image-4-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="images/gallery-image-4-1200x800-original.jpg" data-lightgallery="item"><img
                  src="{{asset('inicios/images/gallery-image-4-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{asset('inicios/images/gallery-image-5-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="images/gallery-image-5-1200x800-original.jpg" data-lightgallery="item"><img
                  src="{{asset('inicios/images/gallery-image-5-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>
          <!-- Thumbnail Classic-->
          <article class="thumbnail thumbnail-mary">
            <div class="thumbnail-mary-figure"><img src="{{asset('inicios/images/gallery-image-6-270x195.jpg')}}" alt="" width="270"
                height="195" />
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                href="images/gallery-image-6-1200x800-original.jpg" data-lightgallery="item"><img
                  src="{{asset('inicios/images/gallery-image-6-270x195.jpg')}}" alt="" width="270" height="195" /></a>
            </div>
          </article>

        </div>
      </div>
    </section>
    <!-- Page Footer-->
    <footer class="section footer-corporate context-dark">
      <div class="footer-corporate-inset">
        <div class="container">
          <div class="row row-40 justify-content-lg-between">
            <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInRight" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Contactanos</h6>
                  <ul class="footer-contacts d-inline-block d-sm-block">
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+51 943-750-857</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                        <div class="unit-body"><a class="link-aemail" href="mailto:#">jorge.castillo@sider.com.pe</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                        <div class="unit-body"><a class="link-location" href="#">AV. SANTIAG ANTUNEZ DE MAYOLO NRO. S/N
                            Z.I. ZONA INDUSTRIAL</a></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInDown" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Popular news</h6>
                  <!-- Post Minimal 2-->
                  <article class="post post-minimal-2">
                    <p class="post-minimal-2-title"><a href="#">Your Personal Guide to 5 Best Places to Visit on
                        Earth</a></p>
                    <div class="post-minimal-2-time">
                      <time datetime="2019-05-04">May 04, 2019</time>
                    </div>
                  </article>
                  <!-- Post Minimal 2-->
                  <article class="post post-minimal-2">
                    <p class="post-minimal-2-title"><a href="#">Top 10 Hotels: Rating by Wonder Tour Travel Experts</a>
                    </p>
                    <div class="post-minimal-2-time">
                      <time datetime="2019-05-04">May 04, 2019</time>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInLeft" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Enlace Rapido </h6>
                  <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                    <li><a href="about.html">About us</a></li>
                    <li><a href="#">Our Tours</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Blog</a></li>
                  </ul>
                  <div class="group-md group-middle justify-content-sm-start"><a
                      class="button button-lg button-primary button-ujarak" href="#">Get in touch</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-corporate-bottom-panel">
        <div class="container">
          <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
            <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
              <div>
                <ul class="list-inline list-inline-sm footer-social-list-2">
                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 order-sm-first">
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span
                  class="copyright-year"></span><span>&nbsp;</span><span>Wonder Tour</span>. All Rights Reserved. Design
                by <a href="https://www.templatemonster.com">TemplateMonster</a></p>
            </div>
            <div class="col-sm-6 col-md-4 text-md-right">
              <p class="rights"><a href="#">Privacy Policy</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="{{asset('inicios/js/core.min.js')}}"></script>
  <script src="{{asset('inicios/js/script.js')}}"></script>
</body>

</html>