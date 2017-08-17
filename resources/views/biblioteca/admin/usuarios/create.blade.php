@extends('template.biblioteca')
@extends('template.menuBiblioteca')
@extends('template.mensajeValidacionErrores')

@section('tituloFormulario','Registro Usuario')

@section('contenidoFormulario')
	
	
	{!! Form::open(['route'=>'usuarios.store','method'=> 'POST']) !!}

		<div class="form-group">
			{!! Form::label('numero_identificacion','Número de Identificación') !!}
			{!! Form::number('numero_identificacion',null,
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
			{!! Form::text('nombre',null,
				['class'=>'form-control',
				 'placeholder'=>'Nombre y Apellidos Completos',
				 'maxlength'=>'50',
				 'minlength'=>'5',
				 'required'
				 ])!!}	
		</div>


		<div class="form-group">
			{!! Form::label('codigo_estudiantil','Código Estudiantil') !!}
			{!! Form::number('codigo_estudiantil',null,
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
			{!! Form::email('correo',null,
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
				 ],'estudiante',
				 [
				 'class'=>'form-control'
				 ])!!}	
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password',
				['class'=>'form-control',
				 'placeholder'=>'******************',
				 'minlength'=>'8',
				 'required'
				 ])!!}	
		</div>


		<div class="form-group centrado">
			{!! Form::submit('Registrar',
				['class'=>'btn btn-default'])
			 !!}
		</div>

	{!! Form::close() !!}

@endsection
