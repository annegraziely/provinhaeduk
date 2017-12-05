var alunos = document.querySelectorAll("#minhaTabela");




alunos.forEach(function(aluno){
	aluno.addEventListener("dblclick",function(ev){
		
		var id = ev.target.textContent;

		//a = document.querySelector("#mat");
		console.log(id);

		

		//console.log(a.textContent);

	 	$.ajax({ 
	 	type: "POST",
	 	url: "remove-aluno.php",
	 	data:{ 
	 		 idAluno: id
			 
	 	}})
	 	.done(function(msg){
	 		$(location).attr("href","menuAluno.php");
	 	});

	 });

});

