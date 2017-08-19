	
	$("#nombre").blur(function(){

		var nombre = $("#nombre").val();

			nombre = nombre.replace(/\s+/gi,' ');

			nombre = nombre.trim();

			nombre = nombre.toLowerCase();

			nombre = nombre.toLowerCase().replace(/\b[a-z]/g, 
					 function(letter) {
    					return letter.toUpperCase();
					  });

			console.log(nombre);

			$("#nombre").val(nombre);

	});