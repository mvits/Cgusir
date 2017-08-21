@section('menuPrincipalBiblioteca')
	   <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('biblioteca') }}">Biblioteca Visión Catastral</a>
          </div>
          <div class="navbar-collapse collapse">

            <!-- Left nav -->
            <ul class="nav navbar-nav">
	              <li><a href="#">Administración<span class="caret"></span></a>
	                <ul class="dropdown-menu">
	                  <li class="dropdown-header">Usuarios</li>
	                  <li><a href="{{ route('usuarios.create') }}">Registro</a></li>
	                  <li><a href="{{ route('usuarios.index') }}">Gestión</span></a></li>
	                  <!-- <li class="divider"></li> -->
	                </ul>
	             </li> 
            </ul>

            <!-- Left nav -->
            <ul class="nav navbar-nav">
                <li><a href="#">Gestión Recursos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-header">Autores</li>
                    <li><a href="{{ route('autores.create') }}">Registro</a></li>
                    <li><a href="{{ route('autores.index') }}">Gestión</span></a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Áreas Conocimiento</li>
                    <li><a href="{{ route('areasConocimiento.create') }}">Registro</a></li>
                    <li><a href="{{ route('areasConocimiento.index') }}">Gestión</span></a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Recursos Bibliográficos</li>
                    <li><a href="#">Registro</a></li>
                    <li><a href="#">Gestión</span></a></li>
                  </ul>
               </li> 
            </ul>

            <!-- Right nav -->
            <ul class="nav navbar-nav navbar-right">
					<li><a href="{{ route('principal') }}"><span class="glyphicon glyphicon-home"> CGUIR</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-user"> Usuario</span></a>
						<ul class="dropdown-menu">
		                  <li class="dropdown-header">Stiv Verdugo</li>
		                  <li><a href="#">Mi Configuración</a></li>
		                  <li class="divider"></li>
		                  <li><a href="#">Salir</a></li>
		                 </ul>
	    			</li>
            </ul>

          </div><!--/.nav-collapse -->
        </div>
@endsection