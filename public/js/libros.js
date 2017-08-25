	
	$( "#anio" ).select2({
	 	theme: "bootstrap",
	 	placeholder: "Seleccione Año",
	 	language: "es"
	});

	$( ".select2Autores" ).select2({
	 	theme: "bootstrap",
	 	placeholder: "Seleccione Autores",
	 	language: "es",
	 	multiple:true
	});


	$( ".select2Areas" ).select2({
	 	theme: "bootstrap",
	 	placeholder: "Seleccione Áreas Conocimiento",
	 	language: "es",
		multiple:true
	});

	/*
		Eliminar Estilo de width que adicional el plugin select2 
		Dado que se sobre pasa en tamaño a diferencia de los otros input*/
 	$(".select2-container").removeAttr("style");


	