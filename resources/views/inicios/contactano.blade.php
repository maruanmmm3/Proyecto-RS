<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Contact Us</title>
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
  <div class="ie-panel">
    <!-- <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a> -->
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
                        <p>09:00<span>am</span> ??? 05:00<span>pm</span></p>
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
                <!-- <a class="button button-md button-default-outline-2 button-ujarak" href="#">Get a Free Quote</a> -->
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
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('inicios.nosotro')}}">Nosotros</a>
                  </li>
                  <!--   <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                  </li> -->
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="{{route('inicios.contactano')}}">Contactanos</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- RD Google Map-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15759.771168615971!2d-78.60023398848621!3d-9.068976573209532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ab810fcda1a241%3A0xe384b6d895885de7!2sSIDERPERU!5e0!3m2!1ses!2spe!4v1638651834740!5m2!1ses!2spe" width="1200" height="530" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    <!-- Contact information-->
    <section class="section section-sm section-first bg-default">
      <div class="container">
        <div class="row row-30 justify-content-center">
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="tel:#">+51 943-750-857</a></p>
                <p class="box-contacts-link"><a href="tel:#">+51 943-770-691</a></p>
              </div>
            </article>
          </div>
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="#"> AV. SANTIAG ANTUNEZ DE MAYOLO NRO. S/N Z.I. ZONA INDUSTRIAL7</a></p>
              </div>
            </article>
          </div>
          <div class="col-sm-8 col-md-6 col-lg-4">
            <article class="box-contacts">
              <div class="box-contacts-body">
                <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                <div class="box-contacts-decor"></div>
                <p class="box-contacts-link"><a href="mailto:#">acuevac@sider.com.pe.</a></p>
                <p class="box-contacts-link"><a href="mailto:#">jcastillo@sider.com.pe</a></p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Form-->
    <section class="section section-sm section-last bg-default text-left">
      <div class="container">
        <article class="title-classic">
          <div class="title-classic-title">
            <h3>Ponerse en contacto</h3>
          </div>
          <div class="title-classic-text">
            <p>Si tienes alguna duda, rellena el formulario de contacto y te responderemos a la brevedad.</p>
          </div>
        </article>
        <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global"
        data-form-type="contact" method="post" action="{{route('inicios.contactanos')}}">
          @csrf
          <div class="row row-14 gutters-14">
            <div class="col-md-4">
              <div class="form-wrap">
                <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                <label class="form-label" for="contact-your-name-2">Tu nombre</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-wrap">
                <input class="form-input" id="contact-email-2" type="email" name="email"
                  data-constraints="@Email @Required">
                <label class="form-label" for="contact-email-2">E-mail</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-wrap">
                <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                <label class="form-label" for="contact-phone-2">Telefono</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-wrap">
                <label class="form-label" for="contact-message-2">Mensaje</label>
                <textarea class="form-input textarea-lg" id="contact-message-2" name="message"
                  data-constraints="@Required"></textarea>
              </div>
            </div>
          </div>
          <button class="button button-primary button-pipaluk" type="submit" type="submit">Enviar Mensaje</button>
        </form>
      </div>
    </section>

    <!-- Page Footer-->
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
                  class="copyright-year"></span><span>&nbsp;</span><span>Wonder Tour</span>. Reservados todos los derechos. Dise??o de <a href="https://www.templatemonster.com">TemplateMonster</a></p>
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