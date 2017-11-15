<?php
	$matriculaAluno = $_GET['matriculaAluno'];
	$nomeAluno =$_GET['nomeAluno'];
	$dataNascAluno = $_GET['dataNascAluno'];
	$sexoAluno = $_GET['sexoAluno'];
	$serieAluno = $_GET['serie'];


	$conexao = mysqli_connect('localhost','root','','eduk');


	$query = "insert into aluno(matricula,nome,serie,sexo,dataNasc)values('{$matriculaAluno}','{$nomeAluno}','{$serieAluno}','{$sexoAluno}','{$dataNascAluno}')";

	mysqli_query($conexao,$query);


	
	mysqli_close($conexao);



	//	echo("Adicionado!");
?>