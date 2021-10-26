<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- nuevo --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://(cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />

    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }

    </style>

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        {{-- @livewire('navigation') --}}

        <!-- Page Heading -->
        {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

        <body>
            <!-- Left Panel -->
            <aside id="left-panel" class="left-panel">
                <nav class="navbar navbar-expand-sm navbar-default">
                    <div id="main-menu" class="main-menu collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="{{ route('admin.proyectos.index') }}"><i
                                        class="menu-icon fa fa-laptop"></i>Dashboard </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.technicals.index') }}"> <i
                                        class="menu-icon fa fa-home"></i>Technical school </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.sembrandos.index') }}"> <i class="menu-icon 	fa fa-tree"></i>Sembrando vida </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.navidads.vista') }}"> <i
                                        class="menu-icon fa fa-dropbox"></i>Campaña navideña </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.voluntarios.index') }}"> <i class="menu-icon 	fa fa-street-view"></i>Orientacion vocacional </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.orquestas.index') }}"> <i
                                        class="menu-icon fa fa-user"></i>Orquesta sinfonica </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.mensajes.index') }}"> <i
                                        class="menu-icon fa fa-envelope"></i>Mensajes</a>
                            </li>

                            @foreach ($proyectos as $proyecto)
                                <li>
                                    <a href="{{ route('admin.proyectos.vista') }}"> <i
                                            class="menu-icon fa fa-user"></i>{{ $proyecto->nombre }} </a>
                                </li>
                            @endforeach
                            <li>
                                <a href="{{ route('admin.proyectos.create') }}"
                                    class="w-100 d-flex justify-content-center align-items-center"> <i
                                        class="fa fa-plus-circle text-secondary" style="font-size:2em"></i>
                                    &nbsp;&nbsp;Nuevo proyecto </a>
                            </li>

                            <li>
                                <a href="javascript:void" class="mt-4 w-100 d-flex justify-content-between p-3">
                                   
                                    <i class="fa fa-facebook text-primary" style="font-size:1.3em"></i>
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="btn btn-danger" role="menuitem"  onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                      Cerrar Sesion
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </aside>

            {{-- headers de datos --}}
            <div id="right-panel" class="right-panel">






                <header id="header" class="header">
                    <div class="top-left">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="./">Logo aqui</a>
                            <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                    <div class="top-right">
                        <div class="header-menu">
                            <div class="header-left">

                                {{-- <a href="{{ route('profile.show') }}" class="btn btn-info mt-2" role="menuitem">Tu Perfil</a> --}}
                                {{-- <button class="search-trigger"><i class="fa fa-search"></i></button>
                                <div class="form-inline">
                                    <form class="search-form">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                            aria-label="Search">
                                        <button class="search-close" type="submit"><i
                                                class="fa fa-close"></i></button>
                                    </form>
                                </div> --}}
                            </div>
                            <div class="user-area dropdown float-right" x-data="{ open: false}">
                                <a href="#"  x-on:click="open = true" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img class="user-avatar rounded-circle" src="{{ auth()->user()->profile_photo_url }}" alt="User Avatar">
                                </a>
                                <div class="user-menu dropdown-menu" x-show="open" x-on:click.away="open = false">
                                    <a class="nav-link" href="#"><i class="fa fa- user"></i>Perfil</a>
                                    <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Salir</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </header>





                <div class="content">
                    <!-- Animated -->
                    <div class="animated fadeIn">
                        <!-- Widgets  -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-1">
                                                <i class="pe-7s-user"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text"><span
                                                            class="count">100{{-- {{$estudiantes}} --}}</span></div>
                                                    <div class="stat-heading">Estudiantes</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-2">
                                                <i class="fa fa-tree"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text"><span class="count">3435</span>
                                                    </div>
                                                    <div class="stat-heading">Sembrados</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-3">
                                                <i class="fa fa-dropbox"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text"><span class="count">700</span>
                                                    </div>
                                                    <div class="stat-heading">Beneficiados</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-4">
                                                <i class="pe-7s-users"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text"><span class="count">100</span>
                                                    </div>
                                                    <div class="stat-heading">Beneficiados</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div id="right-panel" class="right-panel"> --}}
                    @yield('contenido')
                    {{-- </div> --}}

                    <!-- Page Content -->
                    {{-- <main>
                {{ $slot }}
            </main> --}}
                </div>

                @stack('modals')

                <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="{{ asset('assets/js/main.js') }}"></script>

                @livewireScripts
        </body>

</html>
