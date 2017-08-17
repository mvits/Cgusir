@extends('template.biblioteca')
@extends('template.menuBiblioteca')
@extends('template.mensajeValidacionErrores')

@section('tituloFormulario','Editar Usuario: '.$usuario->numero_identificacion. ' - '. $usuario->nombre.'')


@section('contenidoFormulario')

	{!! Form::open(['route'=>['usuarios.update',$usuario],'method'=> 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('numero_identificacion','Número de Identificación') !!}
			{!! Form::number('numero_identificacion',$usuario->numero_identificacion,
				['class'=>'form-control',
				 'placeholder'=>'N# Cédula Ciudadanía o N# Tarjeta Identidad ...',
				 'step'=>'Any',
				 'max'=>'4000000000',
				 'min'=>'500000',
				 'required'
				 ])!!}	
		</div>


		<div class="form-group">
			{!! Form::label('nombre','Nombre') !!}
			{!! Form::text('nombre',$usuario->nombre,
				['class'=>'form-control',
				 'placeholder'=>'Nombre y Apellidos Completos',
				 'maxlength'=>'50',
				 'minlength'=>'5',
				 'required'
				 ])!!}	
		</div>


		<div class="form-group">
			{!! Form::label('codigo_estudiantil','Código Estudiantil') !!}
			{!! Form::number('codigo_estudiantil',$usuario->codigo_estudiantil,
				['class'=>'form-control',
				 'placeholder'=>'Código Estudiantil Valido',
				 'step'=>'Any',
				 'max'=>'20300000000',
				 'min'=>'20000000000',
				 'required'
				 ])!!}	
		</div>

		<div class="form-group">
			{!! Form::label('correo','Correo') !!}
			{!! Form::email('correo',$usuario->correo,
				 [
				 'class'=>'form-control',
				 'placeholder'=>'Example@gmail.com',
				 'required'
				 ])!!}	
		</div>


		<div class="form-group">
			{!! Form::label('tipo','Tipo Usuario') !!}
			{!! Form::select('tipo',
				['estudiante'=>'Estudiante',
				 'administrador'=>'Administrador',
				 'administradorGeneral'=>'Administrador General'
				 ],$usuario->tipo,
				 [
				 'class'=>'form-control'
				 ])!!}	
		</div>


		<div class="form-group centrado">
			{!! Form::submit('Actualizar',
				['class'=>'btn btn-default'])
			 !!}
		</div>




	{!! Form::close() !!}

@endsection
