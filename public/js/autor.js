	
	function ucword(str){
		    str = str.toLowerCase().replace(/(^([a-zA-Z\p{M}]))|([ -][a-zA-Z\p{M}])/g, function(replace_latter) { 
		        return replace_latter.toUpperCase();
		    }); 
    	return str; 
	}

	$("#nombre").blur(function(){

		var nombre = $("#nombre").val();

			nombre = nombre.replace(/\s+/gi,' ');

			nombre = nombre.trim();

			nombre = nombre.toLowerCase();

			nombre = ucword(nombre);

			console.log(nombre);

			$("#nombre").val(nombre);

	});

