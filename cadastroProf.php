<?php
	$matricula = $_GET['matriculaProf'];
	$nome =$_GET['nomeProf'];
	$email = $_GET['emailProf'];
	$senha = $_GET['senhaProf'];
	$sexo = $_GET['sexoProf'];
	$rg = $_GET['rgProf'];
	$cpf = $_GET['cpfProf'];
	$dataNasc = $_GET['dataNascProf'];


	$conexao = mysqli_connect('localhost','root','','eduk');


	$query = "insert into professor(matricula,nome,email,senha,sexo,rg,cpf,dataNasc)values('{$matricula}','{$nome}','{$email}',
	'{$senha}','{$sexo}','{$rg}','{$cpf}','{$dataNasc}')";

	mysqli_query($conexao,$query);
	mysqli_close($conexao);

	echo("Adicionado!");
?>