


carregarProf();


function carregarProf(){
	var itens = "", url = "listarProf.php";

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
				itens +="<td id='mat'>" + retorno[i].matricula+"</td>";
				itens +="<td>"+ ""				 +"</td>";
				itens +="</tr>";
			}
			$("#minhaTabela tbody").html(itens);

			$("h5").html("Carregado!");
		}
	}   


	});

}

