
<?php include("conecta.php"); ?>
<?php
	
	

	header('Content-Type:'."text/plain");
	
	// function ListaAlunos($conexao){
	// 	$alunos = [];
	// 	$resultado = mysqli_query($conexao,"select * from aluno");

	// while ($aluno = mysqli_fetch_assoc($resultado)) {
	// 	array_push($alunos, $aluno);

	// 	// echo $aluno['nome']." ";
	// 	// echo $aluno['sexo']."<br>";
	// }
	// return $alunos;

	// }
	//ListaAlunos($conexao);

	//function ListaAlunos($conexao){
		$alunos=[];
		$sql = mysqli_query($conexao,"select * from aluno");
		$row = mysqli_num_rows($sql);

		if(!$sql){
			echo '[{"Erro":"Há algum erro com a busca."';
			echo '}]';
		}else if($row<1){
			echo '[{"Erro":"Não há nenhum dado cadastrado"';
			echo '}]';
		}else{
			while ($aluno = mysqli_fetch_assoc($sql)) {
		 	array_push($alunos, $aluno);

			
		}
		echo json_encode($alunos, JSON_PRETTY_PRINT);
		
	}
	

//}
?>