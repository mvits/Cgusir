@extends('template.biblioteca')
@extends('template.menuBiblioteca')

@section('tituloFormulario','Lista de Recursos Bibliográficos')

@section('contenidoFormulario')

	<!-- Buscador Recursos -->
		{!! Form::open([
				'route' => 'libros.index',
				'method' => 'GET',
				'class' => 'navbar-form pull-right'
			])!!}

				<dir class="input-group">
					{!! Form::text('titulo', null,
						['class' => 'form-control',
						 'placeholder' => 'Buscar Recursos',
						 'aria-describedby' => 'buscar'
						 ]) !!}
				 	<span class="input-group-addon" id='buscar'>
						<span type='submit' class="glyphicon glyphicon-search" aria-hidden="true"></span>
				 	</span> 
				</dir>
		{!! Form::close() !!}	
	<!-- End Buscador Recursos -->
	<br>
	<br>
	<hr>
	<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered">
			<thead> 
				<th>Gestión</th>
				<th>Estado<br>Préstamo</th>
				<th>Título</th>
				<th>Autor</th>
				<th>Áreas<br>Conocimiento</th>
			</thead>
			<tbody>
				@foreach($libros as $libro)
					<tr>
						<td class="centrado">
							<a href="{{ route('libros.edit',$libro->id) }}" class="btn btn-info">
								<span class="glyphicon glyphicon-pencil">
								</span>
							</a>
							<a href="{{ route('libros.destroy',$libro->id) }}"
								onclick="return confirm('¿Seguro que desea ELIMINAR recurso biliográfico?\n{{ $libro->titulo }}')" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove-circle">
								</span>
							</a>
						</td>
						<td class="centrado">{{ $libro->estado_prestamo }}</td>
						<td>{{ $libro->titulo }}</td>
						<td>
							@foreach($libro->autores as $autor)
								{{ $autor->nombre }}<br>
							@endforeach
						</td>
						<td>
							@foreach($libro->areas as $area)
								<span class="label label-info">{{ $area->nombre }}</span><br>
							@endforeach
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>	
	</div>

	<div class="form-group centrado">
			{!! Form::label('Page','Página '.$libros->currentPage()) !!}<br>
			{!! $libros->render() !!}
	</div>	
@endsection

