@extends('template.biblioteca')
@extends('template.menuBiblioteca')

@section('tituloFormulario','Lista de Áreas Conocimientos')

@section('contenidoFormulario')

	<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered">
			<thead> 
				<th>Gestión</th>
				<th>Nombre</th>
				<th>Descripción</th>
			</thead>
			<tbody>
				@foreach($areas as $area)
					<tr>
						<td class="centrado">
							<a href="{{ route('areasConocimiento.edit',$area->id) }}" class="btn btn-info">
								<span class="glyphicon glyphicon-pencil">
								</span>
							</a>
							<a href="{{ route('areasConocimiento.destroy',$area->id) }}"
								onclick="return confirm('¿Seguro que desea ELIMINAR Área de Conocimiento?\n{{ $area->nombre }}')" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove-circle">
								</span>
							</a>
						</td>
						<td>{{ $area->nombre }}</td>
						<td class="centrado">
							@if(!is_null($area->descripcion))
								<a href="{{ route('areasConocimiento.descripcion',$area->id) }}"
								 class="btn btn-info">Descripción y/o<br>Definición</a>
							@endif
						</td>
						
					</tr>
				@endforeach
			</tbody>
		</table>	
	</div>

	<div class="form-group centrado">
			{!! Form::label('Page','Página '.$areas->currentPage()) !!}<br>
			{!! $areas->render() !!}
	</div>	
@endsection

