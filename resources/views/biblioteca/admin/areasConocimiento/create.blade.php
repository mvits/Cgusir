@extends('template.biblioteca')
@extends('template.menuBiblioteca')
@extends('template.mensajeValidacionErrores')

@section('tituloFormulario','Registro Áreas Conocimiento')

@section('contenidoFormulario')
	
	
	{!! Form::open(['route'=>'areasConocimiento.store','method'=> 'POST']) !!}
		<div class="form-group">
			{!! Form::label('nombre','Nombre') !!}
			{!! Form::text('nombre',null,
				['class'=>'form-control',
				 'placeholder'=>'Nombre Completo',
				 'maxlength'=>'100',
				 'minlength'=>'4',
				 'required'
				 ])!!}	
		</div>

		<div class="form-group">
			{!! Form::label('descripcion','Descripción') !!}
			{!! Form::textarea('descripcion',null,
				['class'=>'form-control',
				 'placeholder'=>'Descripción o definición del área de conocimiento',
				 'maxlength'=>'50000',
				 'minlength'=>'5',
				 'rows'=>'3'
				 ])!!}	
		</div>

			

		<div class="form-group centrado">
			{!! Form::submit('Registrar',
				['class'=>'btn btn-default'])
			 !!}
		</div>

	{!! Form::close() !!}



@endsection

@section('javascriptOpcional')
	{{ Html::script('js/estandarizacionNombre.js') }}
@endsection

