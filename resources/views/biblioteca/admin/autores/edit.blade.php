@extends('template.biblioteca')
@extends('template.menuBiblioteca')
@extends('template.mensajeValidacionErrores')

@section('tituloFormulario','Editar Autor : '.$autor->nombre)

@section('contenidoFormulario')
	
	
	{!! Form::open(['route'=>['autores.update',$autor],'method'=> 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('nombre','Nombre') !!}
			{!! Form::text('nombre',$autor->nombre,
				['class'=>'form-control',
				 'placeholder'=>'Nombre Completo',
				 'maxlength'=>'100',
				 'minlength'=>'4',
				 'required'
				 ])!!}	
		</div>

		<div class="form-group">
			{!! Form::label('link_bibliografia','Link Bibliográfia') !!}
			{!! Form::textarea('link_bibliografia',$autor->link_bibliografia,
				['class'=>'form-control',
				 'placeholder'=>'Link Bibliográfia',
				 'maxlength'=>'300',
				 'minlength'=>'5',
				 'rows'=>'3'
				 ])!!}	
		</div>

			

		<div class="form-group centrado">
			{!! Form::submit('Actualizar',
				['class'=>'btn btn-default'])
			 !!}
		</div>

	{!! Form::close() !!}

@endsection

@section('javascriptOpcional')
	{{ Html::script('js/estandarizacionNombre.js') }}
@endsection