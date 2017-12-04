<?php include("conecta.php"); ?>

<?php
	$matriculaAluno = $_GET['matriculaAluno'];
	$senha = '123';
	$nomeAluno =$_GET['nomeAluno'];
	$dataNascAluno = $_GET['dataNascAluno'];
	$sexoAluno = $_GET['sexoAluno'];
	$serieAluno = $_GET['serie'];

	function InsereAluno($conexao, $matriculaAluno, $senha,$nomeAluno,$dataNascAluno, $sexoAluno, $serieAluno){

	 $query = "insert into aluno(matricula,senha,nome,serie,sexo,dataNasc)values('{$matriculaAluno}','{$senha}','{$nomeAluno}','{$serieAluno}','{$sexoAluno}','{$dataNascAluno}')";

	return mysqli_query($conexao,$query);
	
	 }

	 function login($conexao,$matriculaAluno,$senha){
	 	$query2 = "insert into login(user,senha)values('{$matriculaAluno}','{$senha}')";

	 	return mysqli_query($conexao,$query2);
	 }


	 if(InsereAluno($conexao, $matriculaAluno, $senha, $nomeAluno,$dataNascAluno, $sexoAluno, $serieAluno)&&login($conexao,$matriculaAluno,$senha)){
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