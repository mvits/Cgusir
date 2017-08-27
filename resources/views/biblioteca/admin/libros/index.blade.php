@extends('template.biblioteca')
@extends('template.menuBiblioteca')

@section('tituloFormulario','Lista de Recursos Bibliográficos')

@section('contenidoFormulario')
	
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
								onclick="return confirm('¿Seguro que desea ELIMINAR usuario?\n{{ $libro->numero_identificacion }} -{{ $libro->nombre }}')" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove-circle">
								</span>
							</a>
						</td>
						<td>{{ $libro->titulo }}</td>
						<td>{{ $libro->nombre }}</td>
						<td>
							@if($libro->tipo == 'administradorGeneral')
								<span class="label label-success">Administrador General</span>
							@elseif($libro->tipo == 'administrador')
								<span class="label label-primary">Administrador</span>
							@else
								<span class="label label-default">Estudiante</span>
							@endif
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

