var professores = document.querySelectorAll("#minhaTabela");




professores.forEach(function(professor){
	professor.addEventListener("dblclick",function(ev){
		
		var id = ev.target.textContent;

		//a = document.querySelector("#mat");
		console.log(id);

		

		//console.log(a.textContent);

	 	$.ajax({ 
	 	type: "POST",
	 	url: "remove-prof.php",
	 	data:{ 
	 		 id: id
			 
	 	}})
	 	.done(function(msg){
	 		$(location).attr("href","menuProf.php");
	 	});

	 });

});

