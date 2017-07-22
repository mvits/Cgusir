@extends('template.paginaInicial')


@section('nombreGrupo')
Visión Catastral
@endsection

<!-- Menu Aplicativo -->
@section('menuPrincipal')
	<li><a href="#contenido">Reseña Grupo</a></li>
	<li><a href="#features">Biblioteca</a></li>
	<!-- <li><a href="#gallery">Gallery</a></li>-->
    <!--<li><a href="#team">Miembros Activos</a></li>-->
    <!--<li><a href="#testimonial">Precious Reviews</a></li>-->
    <li><a href="#contact">Contáctenos</a></li>
@endsection
<!-- *** -->


<!--  Sección Inicial -->

@section('tituloSeccionInicial')
GRUPO ESTUDIANTIL Y DE TRABAJO ACADÉMICO
@endsection

@section('contenidoSeccionInicial')
Visión Catastral es el principal grupo estudiantil perteneciente al proyecto curricular de Ingeniería Catastral y Geodesia de la facultad de Ingeniería.
@endsection
<!-- *** -->



<!--  Reseña Grupo -->
@section('mision')
Mision
@endsection

@section('contenidoMision')
Mantener y desarrollar los esfuerzos de la comunidad académica que siente la necesidad de aportar, compartir y enriquecer el conocimiento el cual servirá de base y ejemplo para todos además de una nueva visión y deseo de apoyar los grupos de investigación que surjan y quieran utilizar el espacio, los equipos y la documentación facilitada.
@endsection

@section('vision')
Visión
@endsection

@section('contenidoVision')
Generar espacios y procesos encaminados a extender la perspectiva del estudiante de Ingeniería Catastral y Geodesia, apoyando la formación académica y social, mediante la implementación de planes de apoyo a los compañeros y la colaboración docente.
@endsection

@section('historia')
Historia
@endsection

@section('contenidoHistoria')
Visión catastral comienza sus labores en la década de los 80 cuando los estudiantes de esa época crean expectativas e interrogantes sobre los espacios que la universidad ofrecía a nuestra carrera. Muchos estudiantes con materias terminadas donaron libros que han aportado información importante en las diferentes áreas de la carrera. En 1996 el espacio perteneciente a este grupo académico fue demolido y los elementos pertenecientes al grupo fueron guardados y por ende el grupo tuvo un receso en sus actividades. En 1998 el espacio fue retomado en el lugar en donde está actualmente.
@endsection


<!-- *** -->


<!-- Contacto -->

@section('titulosContato')
Contáctenos
@endsection

@section('direccionVision')
Cra. 7 #40B - 53, Bogotá,Universidad Distrital Francisco José de Caldas, Segundo Piso Edificio Copete. 
@endsection

@section('correoVision')
stiv.zeuq@gmail.com
@endsection

@section('linkVision')
<a target="_blank" href="https://www.facebook.com/vision.getvicat">Facebook: vision.getvicat</a>
@endsection
<!-- *** -->

<!-- Footer -->

@section('descripcionPlantilla')
&copy; 2017 Visión Catastral
<br>Universidad Distrital Francisco José de Caldas
<br>Basado en Diseño --------
@endsection


@section('logos')
<img data-wow-duration="1.2s" src="{{ asset('images/visionCatastrallogo.png') }}"></img>
@endsection

<!-- *** -->








