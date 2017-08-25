	
	function ucword(str){
		    str = str.toLowerCase().replace(/(^([a-zA-Z\p{M}]))|([ -][a-zA-Z\p{M}])/g, function(replace_latter) { 
		        return replace_latter.toUpperCase();
		    }); 
    	return str; 
	}
	
	function upperFirst(string){
	  return string.charAt(0).toUpperCase() + string.slice(1);
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

	$("#titulo").blur(function(){

		var nombre = $("#titulo").val();

			nombre = nombre.replace(/\s+/gi,' ');

			nombre = nombre.trim();

			nombre = nombre.toLowerCase();

			nombre = upperFirst(nombre);

			console.log(nombre);

			$("#titulo").val(nombre);

	});

