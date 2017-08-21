@extends('template.biblioteca')
@extends('template.menuBiblioteca')
@extends('template.mensajeValidacionErrores')

@section('tituloFormulario','Registro Autores')

@section('contenidoFormulario')
	
	
	{!! Form::open(['route'=>'autores.store','method'=> 'POST']) !!}
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
			{!! Form::label('link_bibliografia','Link Bibliográfia') !!}
			{!! Form::textarea('link_bibliografia',null,
				['class'=>'form-control',
				 'placeholder'=>'Link Bibliográfia',
				 'maxlength'=>'300',
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

