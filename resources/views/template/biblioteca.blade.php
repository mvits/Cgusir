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
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700|Oxygen:400,300,700' rel='stylesheet'>

</head>
<body>

    <section id='cabecera' >
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Biblioteca Visión Catastral</a>
          </div>
          <div class="navbar-collapse collapse">

            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="#">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</span></a></li>
                </ul>
              </li>
            </ul>

            <!-- Right nav -->
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">A sub menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>
                      <li><a href="#">One more link</a></li>
                    </ul>
                  </li>
                  <li><a href="#">A separated link</a></li>
                </ul>
              </li>
            </ul>

          </div><!--/.nav-collapse -->
        </div>
    </section>
    <section id='contenido' >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">Panel content</div>
        </div>
    </section>

    <script src="{{ asset('plugins/jquery/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/smartmenus/jquery.smartmenus.min.js') }}"></script>
    <script src="{{ asset('plugins/smartmenus/addons/bootstrap/jquery.smartmenus.bootstrap.js') }}"></script>
</body>
</html>
