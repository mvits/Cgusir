@extends('template.biblioteca')
@extends('template.menuBiblioteca')

@section('tituloFormulario','Lista de Usuarios')

@section('contenidoFormulario')
	
	<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered">
			<thead> 
				<th>Gestión</th>
				<th>Número<br>Identificacion</th>
				<th>Nombre</th>
				<th>Tipo</th>
			</thead>
			<tbody>
				@foreach($usuarios as $usuario)
					<tr>
						<td class="centrado">
							<a href="#" class="btn btn-info">
								<span class="glyphicon glyphicon-pencil">
								</span>
							</a>
							<a href="{{ route('usuarios.destroy',$usuario->id) }}"
								onclick="return confirm('¿Seguro que desea ELIMINAR usuario?\n{{ $usuario->numero_identificacion }} -{{ $usuario->nombre }}')" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove-circle">
								</span>
							</a>
						</td>
						<td>{{ $usuario->numero_identificacion }}</td>
						<td>{{ $usuario->nombre }}</td>
						<td>
							@if($usuario->tipo == 'administradorGeneral')
								<span class="label label-success">Administrador General</span>
							@elseif($usuario->tipo == 'administrador')
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
			{!! Form::label('Page','Página '.$usuarios->currentPage()) !!}<br>
			{!! $usuarios->render() !!}
	</div>	
@endsection

