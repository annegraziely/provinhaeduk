<?php include("conecta.php"); ?>

<?php
	$matriculaAluno = $_GET['matriculaAluno'];
	$nomeAluno =$_GET['nomeAluno'];
	$dataNascAluno = $_GET['dataNascAluno'];
	$sexoAluno = $_GET['sexoAluno'];
	$serieAluno = $_GET['serie'];

	function InsereAluno($conexao, $matriculaAluno, $nomeAluno,$dataNascAluno, $sexoAluno, $serieAluno){

	 $query = "insert into alunos(matricula,nome,serie,sexo,dataNasc)values('{$matriculaAluno}','{$nomeAluno}','{$serieAluno}','{$sexoAluno}','{$dataNascAluno}')";

	return mysqli_query($conexao,$query);
	
	 }


	 if(InsereAluno($conexao, $matriculaAluno, $nomeAluno,$dataNascAluno, $sexoAluno, $serieAluno)){
	 	echo "Sucesso";
	 	header("Location: menuAluno.php");
	 	die();
	 }else{
	 	$msg = mysqli_error($conexao);
	 	echo $msg;
	 }





	// $query = "insert into aluno(matricula,nome,serie,sexo,dataNasc)values('{$matriculaAluno}','{$nomeAluno}','{$serieAluno}','{$sexoAluno}','{$dataNascAluno}')";

	// mysqli_query($conexao,$query);

	


	//mysqli_close($conexao);



	//	echo("Adicionado!");