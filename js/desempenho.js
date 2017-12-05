
carregar();


function carregar(){
	var itens = "", url = "listaDesempenho.php";

	$.ajax({
		url: url,
		cache: false,
		dataType:"json",
	beforeSend: function(){
			$("h5").html("Carregando...");
		},
	error: function(){
		$("h5").html("Há algum problema com a fonte de dados!");
	},
	success: function(retorno){
		if(retorno[0].erro){
			$("h5").html(retorno[0].erro);
		}else{
			for(var i=0;i<retorno.length;i++){
				itens +="<tr>";
				itens +="<td>" + retorno[i].nome+"</td>";
				itens +="<td id='mat'>" + retorno[i].nota+"</td>";
				itens +="<td>" + retorno[i].status+"</td>";
				itens +="<td>"+ ""				 +"</td>";
				itens +="</tr>";
			}
			$("#minhaTabela tbody").html(itens);

			$("h5").html("Carregado!");
		}
	}   


	});

}


 $(document).ready(function() {
                $('#minhaTabela tr').dblclick(function(ev) {
                    alert('clicou na linha ' + $('#minhaTabela tr').index($(this)));
                    
                    var dados = ev.currentTarget.textContent;
                    console.log(dados);
                    console.log(ev.currentTarget.children[0].textContent);
                    console.log(ev.currentTarget.children[1].textContent);
                    console.log(ev.currentTarget.children[2].textContent);
                    //
                    var nome = ev.currentTarget.children[0].textContent;
                    var nota = ev.currentTarget.children[1].textContent;
                    var status = ev.currentTarget.children[2].textContent;

                     $.ajax({ 
						 type: "POST",
						 url: "gerarPDF.php",
						 data:{
							nome: nome,
						 	nota: nota,
						 	status: status
						 }})
						 .done(function(msg){
							$(location).attr("href","desempenho.php");
						 });
                });
            });




// var alunos = document.querySelectorAll("#minhaTabela");


// alunos.forEach(function(aluno){
// 	aluno.addEventListener("dblclick",function(ev){
			
// 		var id = ev.target;

// 		console.log(aluno);
// 		console.log(id);

// 		//console.log(a.textContent);

	 	

// 	 });

// });




