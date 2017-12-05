 // var bnt_cadastrar = document.querySelector("#bntForm");


// bnt_cadastrar.addEventListener("click",function(event){

// 	event.preventDefault();
// 	console.log(bnt_cadastrar);
// })
$(document).ready(function(){
	$("#cadastrarAluno").submit(function(e){
		e.preventDefault();

		$.ajax({ 
		type: "POST",
		url: "cadastroAluno.php",
		data:{
			 matriculaAluno: $("#matriculaAluno").val(),
			 nomeAluno: $("#nomeAluno").val(),
			 sexoAluno: $("#sexoAluno").val(),
			 serieAluno: $("#serie option:selected").val(),
			 dataNascAluno: $("#dataNascAluno").val()
		}})
		.done(function(msg){
			$(location).attr("href","menuAluno.php");
		});


	});

})




	