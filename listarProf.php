<?php include("conecta.php"); ?>

<?php
	
	function ListaProf($conexao){
		$professores = [];
		$resultado = mysqli_query($conexao,"select * from professor");

	while ($professor = mysqli_fetch_assoc($resultado)) {
		array_push($professores, $professor);

		// echo $aluno['nome']." ";
		// echo $aluno['sexo']."<br>";
	}
	return $professores;

	}


