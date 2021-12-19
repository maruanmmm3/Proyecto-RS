<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>About</title>
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
    .circle1 {
            width: 300px;
            height: 300px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            bottom: -70px;
            right: 300px;
            border: 2px solid rgb(241, 0, 0);
        }

        .circle1_2 {
            width: 290px;
            height: 290px;
            margin: auto;
            background-color: rgba(0, 0, 0, 0.5);
            background-image: url('images/graduacion.jpg');
            background-size: cover;
            border-radius: 50%;
        }

        .circle2 {
            width: 200px;
            height: 200px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            z-index: 10;
            bottom: -70px;
            right: 200px;
            border: 2px solid rgb(241, 0, 0);
        }

        .circle2_2 {
            width: 190px;
            height: 190px;
            margin: auto;
            background-color: rgba(0, 0, 0, 0.5);
            background-image: url('images/graduacion.jpg');
            background-size: cover;
            border-radius: 50%;
        }
        .contorn-circle {
            width: 80px;
            height: 80px;
            background-color: rgb(255, 0, 0);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn-add-custom{
            background-color: rgb(36, 125, 226);
            border:0px;
            color: rgb(245, 245, 245);
            padding: 2em 5em;
            outline: none;
            margin-bottom: 4em;
        }
        img{
          width: 350px;
          height: 320px;
          padding: 15px;
        }
  </style>
</head>

<body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
        src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
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
    <!-- <a class="banner banner-top" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank"><img src="images/intense_02.jpg" alt=""/></a> -->
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
                  <!--Brand--><a class="brand" href="index.html"><img src="{{asset('inicios/images/sider.png')}}" alt="" width="225"
                      height="18" /></a>
                </div>
              </div>
              <div class="rd-navbar-aside-right rd-navbar-collapse">
                <ul class="rd-navbar-corporate-contacts">
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                      <div class="unit-body">
                        <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs">
                      <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                      <div class="unit-body"><a class="link-phone" href="tel:#">+51 943529504</a></div>
                    </div>
                  </li>
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
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('inicios.index')}}">Inicio</a>
                  </li>
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="{{route('inicios.nosotro')}}">Nosotros</a>
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
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom-inset">
      <div class="breadcrumbs-custom context-dark bg-overlay-60">
        <div class="container">
          <h2 class="breadcrumbs-custom-title"></h2>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html"></a></li>
            <li class="active"></li>
          </ul>
        </div>
        <div class="box-position" style="background-image: url({{asset('inicios/images/fondo.jpg')}});"></div>
      </div>
    </section>
{{-- Reconocimiento --}}
    <section class="py-5" style="margin-top:2em; padding: 0; ">
      <h3 class="text-center" style="text-decoration: underline red;">Reconocimientos</h3>

<div class="bg-danger" style="height:10px"></div>
     
      <div style="background-image:url({{asset('images/graduacion.jpg')}}); width: 100%; background-size: cover;">
          <div class="p-3" class="w-100" style="background-color: rgba(0, 0, 0, 0.5); height: 100%;">
              <div class="container">



                @if ($reconocimientos->count())
                  <div class="row">

                      @foreach ($reconocimientos as $reconocimiento)
                          
                      <div class="col-md-4">

                          <p class="text-white fw-bold">{{$reconocimiento->nombre}}</p>
                          <img src="{{asset($reconocimiento->image->url)}}" class="w-100" alt="">
                          <div class="w-100" >
                              <p class="text-white" style="text-align: justify;">{{$reconocimiento->descripcion}}</p>
                          </div>

                      </div>

                      @endforeach

                  </div>

                  @else

                  <div class="card-body mt-3">
                    <h2>No hay registros</h2>
                  </div>

                  @endif
                 

                  <br><br><br>
              </div>
          </div>
      </div>
  </section>
{{-- Fin de Reconocimiento --}}

    <section class="section section-sm section-fluid bg-default">

      <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaltec">
          Technical School
        </button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModaltec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Technical School</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              


              <h3 class="text-center" style="text-decoration: underline red;">Technical School</h3>
              <div class="bg-danger" style="height:10px"></div>
              <div
                  style="background-image:url({{asset('images/graduacion.jpg')}}); width: 100%; background-size: cover; height:100vh;">
  
                  <div class="p-3" class="w-100" style="background-color: rgba(0, 0, 0, 0.5); height: 100%;">
                      <div class="w-75 mx-auto text-center fs-5 text-white">
                          <p>Brindar formación profesion técnica de calidad a los jóvenes de Chimbote, de escasos recursos
                              económicos,
                              para lograr su inserción laboral y mejorar su calidad de vida; a través de becas integrales
                              de
                              estudios.
                              Mas de 800 egresados
                          </p>
                          <div class="w-100 bg-danger my-3" style="height: 3px;"></div>
                      </div>
                      <div class="container">
                          <div class="row">
                              <div class="col-md-6 ml-auto">
                                  <ul class="list-unstyled fs-5  text-white">
                                      <li class="d-flex align-items-center my-3"> <i
                                              class="fa fa-check-circle-o fw-normal  mx-2"></i> Tenemos 1949 Egresados
                                      </li>
                                      <li class="d-flex align-items-center my-3"> <i
                                              class="fa fa-check-circle-o fw-normal  mx-2"></i> 80% Inserción Laboral
                                      </li>
                                      <li class="d-flex align-items-center my-3"> <i
                                              class="fa fa-check-circle-o fw-normal  mx-2"></i> Tenemos 3 promociones
                                          activas </li>
                                      <li class="w-100"> <i class="fa fa-check-circle-o fw-normal  mx-2"></i> Carreras
                                          técnicas:
                                          <ul class="w-100 mx-4">
                                              <li>Ing. Software e AI</li>
                                              <li>Administracion Industrial</li>
                                              <li>Mecatrónica Industrial</li>
                                          </ul>
                                      </li>
  
                                  </ul>
                              </div>
  
                              <div class="col-sm-9" style="position:relative">
                                  <br><br><br><br>
                                  <div class="circle1">
                                      <div class="circle1_2">
  
  
                                      </div>
                                  </div>
                                  <div class="circle2">
                                      <div class="circle2_2">
  
  
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <br><br><br>
                          <div class="w-25 mx-auto bg-danger my-3" style="height: 60%;"></div>
                      </div>
                  </div>
              </div>

              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
     
      @if ($promocions->count())
      <div class="row">
        
      @foreach ($promocions as $promocion)
        <div class="col-lg-3 col-md-3">
          <div class="card">
              <div class="w-100 d-flex justify-content-center">
                  <img src="{{asset($promocion->image->url)}}" alt="">
              </div>
              <div class="card-body text-center vh-40">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalpro{{$promocion->id}}">
                  {{$promocion->nombre}}
                </button>
              </div>
              <div class="w-100 d-flex justify-content-lg-end p-3">
               
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModalpro{{$promocion->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$promocion->nombre}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        {{$promocion->descripcion}}
                        <br>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      @endforeach
      </div>

      @else

      <div class="card-body mt-3">
        <h2>No hay registros</h2>
      </div>

      @endif

      
    </section>



    <section class="section section-sm section-fluid bg-default">

      <div class="container">
        <h3>Sembrando Vida</h3>
      </div>

      @if ($sembrandos->count())
      <div class="row">

      @foreach ($sembrandos as $sembrando)
      <div class="col-lg-3 col-md-3">
          <div class="card">
              <div class="w-100 d-flex justify-content-center">
                  <img src="{{ asset('images/sembrando.jpg') }}" alt="">
              </div>
              <div class="card-body text-center vh-40">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalsem{{$sembrando->id}}">
                  {{$sembrando->nombre}}
                </button>
              </div>
              <div class="w-100 d-flex justify-content-lg-end p-3">
               
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModalsem{{$sembrando->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$sembrando->nombre}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        {{$sembrando->descripcion}}
                        <br>
                        <strong>{{$sembrando->fecha}}</strong>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      @endforeach
      </div>

      @else

      <div class="card-body mt-3">
        <h2>No hay registros</h2>
      </div>

      @endif

    </section>



    <section class="section section-sm section-fluid bg-default">

      <div class="container">
        <h3>Voluntariado</h3>
      </div>
      
      @if ($voluntarios->count())

      <div class="row">
      @foreach ($voluntarios as $voluntario)
      <div class="col-lg-3 col-md-3">
          <div class="card">
              <div class="w-100 d-flex justify-content-center">
                  <img src="{{ asset('images/voluntariado.jpg') }}" alt="">
              </div>
              <div class="card-body text-center vh-40">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaltres{{$voluntario->id}}">
                  {{$voluntario->nombre}}
                </button>
              </div>
              <div class="w-100 d-flex justify-content-lg-end p-3">
               
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModaltres{{$voluntario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$voluntario->nombre}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        {{$voluntario->descripcion}}
                        <br>
                        <strong>{{$voluntario->fecha}}</strong>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      @endforeach
      </div>

      @else

      <div class="card-body mt-3">
        <h2>No hay registros</h2>
      </div>

      @endif
      
    </section>


    <section class="section section-sm section-fluid bg-default">

      <div class="container">
        <h3>Navidad</h3>
      </div>

    @if ($navidads->count())
    <div class="row">

      @foreach ($navidads as $navidad)
      <div class="col-lg-3 col-md-3">
        <div class="card">
            <div class="w-100 d-flex justify-content-center">
                <img src="{{asset('images/gif.gif')}}" alt="">
            </div>
            <div class="card-body text-center vh-40">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$navidad->id}}">
                {{$navidad->nombre}}
              </button>
            </div>
            <div class="w-100 d-flex justify-content-lg-end p-3">
             
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModal{{$navidad->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{$navidad->nombre}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      {{$navidad->descripcion}}
                      <br>
                      <strong>{{$navidad->fecha}}</strong>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      @endforeach

    </div>

    @else
    <div class="card-body mt-3">
      <h2>No hay registros</h2>
    </div>
    @endif
    </section>



    <!-- What people Say-->
    <section class="section section-sm section-last bg-default">
      <div class="container">
        <h3>Misión, Visión, Objetivos, Valores de la empresa.</h3>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-modern" data-items="1" data-stage-padding="15" data-margin="30" data-dots="true"
          data-animation-in="fadeIn" data-animation-out="fadeOut" data-autoplay="true">
          <!-- Quote Lisa-->
          <article class="quote-lisa">
            <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles"
                  src="{{asset('inicios/images/user-16-100x100.jpg')}}" alt="" width="500px" height="500px" /></a>
              <div class="quote-lisa-text">
                <p class="q">La misión y visión está incluido en el propósito general de la empresa,el cual se expresa como: 
                   “Empoderar a las personas que construyen el futuro”.</p>
              </div>
              <h5 class="quote-lisa-cite"><a href="#">SIDERPERU</a></h5>
              <p class="quote-lisa-status">GERDAU</p>
            </div>
          </article>
          <!-- Quote Lisa-->
          <article class="quote-lisa">
            <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles"
                  src="{{asset('inicios/images/user-17-100x100.jpg')}}" alt="" width="500" height="500" /></a>
              <div class="quote-lisa-text">
                <p class="q">Agradecimiento a la empresa “Siderperu” por permitirnos la oportunidad
                   de estudiar y apoyar a este grupo de jóvenes a proyectarse académica y profesionalmente.</p>
              </div>
              <h5 class="quote-lisa-cite"><a href="#">SIDERPERU</a></h5>
              <p class="quote-lisa-status">GERDAU</p>
            </div>
          </article>
          <!-- Quote Lisa-->
          <article class="quote-lisa">
            <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles"
                  src="{{asset('inicios/images/user-18-100x100.jpg')}}" alt="" width="500" height="500" /></a>
              <div class="quote-lisa-text">
                <p class="q">Agradecimiento a nuestras familias que siempre estuvieron
                   con nosotros en los mejores y peores momentos de nuestra vida y nos mostraron su apoyo incondicional.
                </p>
              </div>
              <h5 class="quote-lisa-cite"><a href="#">SIDERPERU</a></h5>
              <p class="quote-lisa-status">GERDAU</p>
            </div>
          </article>

          @foreach ($valors as $valor)
          <article class="quote-lisa">
            <div class="quote-lisa-body"><a class="quote-lisa-figure" href="#"><img class="img-circles"
                  src="{{asset($valor->image->url)}}" alt="" width="500" height="500" /></a>
              <div class="quote-lisa-text">
                <p class="q">{{$valor->texto}}
                </p>
              </div>
              <h5 class="quote-lisa-cite"><a href="#">SIDERPERU</a></h5>
              <p class="quote-lisa-status">GERDAU</p>
            </div>
          </article>
          @endforeach
        </div>
      </div>
    </section>
    <!--Counters-->
    <!-- Counter Classic-->
    <section class="section section-fluid bg-default">
      <div class="parallax-container" data-parallax-img="{{asset('inicios/images/bg-counter-2.jpg')}}">
        <div class="parallax-content section-xl context-dark bg-overlay-26">
          <div class="container">
            <div class="row row-50 justify-content-center border-classic">
              <div class="col-sm-6 col-md-5 col-lg-3">
                <div class="counter-classic">
                
                </div>
              </div>
            </div>
          </div>
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
                        <div class="unit-body"><a class="link-aemail" href="mailto:#">jcastillo@sider.com.pe</a>
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
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-phone" href="tel:#">+51 943-770-691</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit">
                        <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                        <div class="unit-body"><a class="link-aemail" href="mailto:#">acuevac@sider.com.pe</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInDown" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase"></h6>
                  <!-- Post Minimal 2-->
                 
                </div>
              </div>
            </div>
            <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
              <div class="oh-desktop">
                <div class="wow slideInLeft" data-wow-delay="0s">
                  <h6 class="text-spacing-100 text-uppercase">Enlace Rapido </h6>
                  <br>
                  <ul class="">
                    <li><a href="https://www.siderperu.com.pe/">https://www.siderperu.com.pe/</a></li>
                    
                  </ul>

                  <ul class="">
                    <li><a href="https://www.facebook.com/SIDERPERUOFICIAL/">https://www.facebook.com/SIDERPERUOFICIAL/</a></li>
                    
                  </ul>
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
                  <li><a class="icon fa fa-facebook" href="https://www.facebook.com/SIDERPERUOFICIAL/"></a></li>
                  
                  <li><a class="icon fa fa-linkedin" href="https://pe.linkedin.com/company/siderperu"></a></li>
                  <li><a class="icon fa fa-instagram" href="https://www.instagram.com/siderperuoficial/?hl=es-la"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 order-sm-first">
              <!-- Rights-->
             <p class="rights"><span>&copy;&nbsp;</span><span
                  class="copyright-year"></span><span>&nbsp;</span><span>Wonder Tour</span>. Reservados todos los derechos. Diseño de <a href="https://www.templatemonster.com">TemplateMonster</a></p>
            </div>
            <div class="col-sm-6 col-md-4 text-md-right">
              
              <li><a href="https://www.gerdaucorsa.com.mx/sites/mx_gerdau/files/PDF/POLITICA_INTEGRADA_2019-OK-min_0.pdf">Politica de Privacida</a></li>



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