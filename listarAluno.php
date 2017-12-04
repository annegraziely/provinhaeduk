<?php include("conecta.php"); ?>

<?php
	
	function ListaAlunos($conexao){
		$alunos = [];
		$resultado = mysqli_query($conexao,"select * from alunos");

	while ($aluno = mysqli_fetch_assoc($resultado)) {
		array_push($alunos, $aluno);

		// echo $aluno['nome']." ";
		// echo $aluno['sexo']."<br>";
	}
	return $alunos;

	}





	 // $alunos = ListaProdutos($conexao);
	 // foreach ($alunos as $aluno) { 
	 	
	 
		
	 // } 
	

	// if(ListaProdutos($conexao)){

	// 	echo "Sucesso";
	// }else{
	// 	$msg = mysqli_error($conexao);
	// 	echo $msg;
	// }


	
	//mysqli_close($conexao);


