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
    <link rel="stylesheet" href="{{ asset('css/biblioteca.css') }}">
    @yield('cssOpcional')
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700|Oxygen:400,300,700' rel='stylesheet'>

</head>
<body>

    <section id='cabecera' >
         @yield('menuPrincipalBiblioteca')
    </section>
    <section id='mensaje'>
        @include('flash::message')
    </section>
    <section id='contenido'>
        <div class="panel panel-default">
            <div id='tituloFormulario' class="panel-heading">
                <h3 class="panel-title colorGris"><b>@yield('tituloFormulario')</b></h3>
            </div>
            <div id='contenidoFormulario' class="panel-body">
            @yield('mensajeErroresFormulario')
            @yield('contenidoFormulario')
            </div>
        </div>
    </section>

    <script src="{{ asset('plugins/jquery/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Script Menu Principal Biblioteca-->    
    <script src="{{ asset('plugins/smartmenus/jquery.smartmenus.min.js') }}"></script>
    <script src="{{ asset('plugins/smartmenus/addons/bootstrap/jquery.smartmenus.bootstrap.js') }}"></script>
    <script src="{{ asset('js/biblioteca.js') }}"></script>
    @yield('javascriptOpcional')
</body>
</html>
