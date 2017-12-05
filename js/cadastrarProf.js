
$(document).ready(function(){
	$("#formProf").submit(function(e){
		e.preventDefault();

		$.ajax({ 
		type: "POST",
		url: "cadastroProf.php",
		data:{
			 matriculaProf: $("#matriculaProf").val(),
			 nomeProf: $("#nomeProf").val(),
			 emailProf: $("#emailProf").val(),
			 senhaProf: $("#senhaProf").val(),
			 sexoProf: $("#sexoProf").val(),
			 rgProf: $("#rgProf").val(),
			 cpfProf: $("#cpfProf").val(),
			 dataNascProf: $("#dataNascProf").val()
		}})
		.done(function(msg){
			$(location).attr("href","menuProf.php");
		});


	});

})




	