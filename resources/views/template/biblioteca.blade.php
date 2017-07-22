<!DOCTYPE html>
<html lang="es">
<head>
    <title>CGUIR</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/poloPlantilla/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/poloPlantilla/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/poloPlantilla/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/poloPlantilla/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/poloPlantilla/css/style.css') }}">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700|Oxygen:400,300,700' rel='stylesheet'>

</head>
<body>

    <!-- ****************************** Preloader ************************** -->

    <div id="preloader"></div>

    <!-- ****************************** Sidebar ************************** -->
    <nav id="sidebar-wrapper">
        <a id="menu-close" href="#" class="close-btn toggle"><i class="ion-ios-close-empty"></i></a>
        <ul class="sidebar-nav">
            <li><a href="#home">Inicio</a></li>
            @yield('menuPrincipal')
        </ul>
    </nav>


    <!-- ****************************** Header ************************** -->

    <header class="fixed" id="header">
        <section class="container">
            <section class="row" id="logo_menu">
                <section class="col-xs-8"><a class="logo" href="">@yield('nombreGrupo')</a></section>
                <section class="col-xs-4"><a id="menu-toggle" href="#" class="toggle wow rotateIn" data-wow-delay="1s"><i class="ion-navicon"></i></a></section>
            </section>
        </section>
    </header>

    <section id="contenido">
            
                <div class="col-md-12">
                    <div class="headings">
                        <h1>asdahksbuhbadb</h1>
                        <p>asdamdomoasmdom</p>
                    </div>
                </div>

    </section>


    


    <!-- All the scripts -->

    <script src="{{ asset('plugins/poloPlantilla/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/poloPlantilla/js/wow.min.js') }}"></script>
    <script src="{{ asset('plugins/poloPlantilla/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('plugins/poloPlantilla/js/script.js') }}"></script>

</body>
</html>
