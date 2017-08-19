@extends('template.biblioteca')
@extends('template.menuBiblioteca')

@section('tituloFormulario','Lista de Autores')

@section('contenidoFormulario')
	<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered">
			<thead> 
				<th>Gestión</th>
				<th>Nombre</th>
				<th>Bibliografía</th>
			</thead>
			<tbody>
				@foreach($autores as $autor)
					<tr>
						<td class="centrado">
							<a href="{{ route('autores.edit',$autor->id) }}" class="btn btn-info">
								<span class="glyphicon glyphicon-pencil">
								</span>
							</a>
							<a href="{{ route('autores.destroy',$autor->id) }}"
								onclick="return confirm('¿Seguro que desea ELIMINAR Autor?\n{{ $autor->nombre }}')" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove-circle">
								</span>
							</a>
						</td>
						<td>{{ $autor->nombre }}</td>
						<td class="centrado">
							@if(!is_null($autor->link_bibliografia))
								<span class="label alert-info"><a target="_blank" href="{{ $autor->link_bibliografia }}">Bibliográfia Externa</a></span>
							@endif
						</td>
						
					</tr>
				@endforeach
			</tbody>
		</table>	
	</div>

	<div class="form-group centrado">
			{!! Form::label('Page','Página '.$autores->currentPage()) !!}<br>
			{!! $autores->render() !!}
	</div>	
@endsection

