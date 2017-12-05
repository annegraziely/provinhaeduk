<?php include("conecta.php"); ?>

<?php


	header('Content-Type:'."text/plain");
	

	ListaStatus($conexao);

	function ListaStatus($conexao){
		$alunos = [];
		$resultado = mysqli_query($conexao,"select nome, nota, status from status inner join aluno on status.alunoID=aluno.matricula");

	while ($aluno = mysqli_fetch_assoc($resultado)) {
		array_push($alunos, $aluno);

		// echo $aluno['nome']." ";
		// echo $aluno['sexo']."<br>";
	}
	echo json_encode($alunos, JSON_PRETTY_PRINT);

	}

 