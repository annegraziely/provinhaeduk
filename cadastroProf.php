<?php include("conecta.php");?>

<?php

	header('Content-Type:'."text/plain");

	$matricula = $_POST['matriculaProf'];
	$nome =$_POST['nomeProf'];
	$email = $_POST['emailProf'];
	$senha = $_POST['senhaProf'];
	$sexo = $_POST['sexoProf'];
	$rg = $_POST['rgProf'];
	$cpf = $_POST['cpfProf'];
	$dataNasc = $_POST['dataNascProf'];


	function InsereProf($conexao,$matricula,$nome,$email,$senha,$sexo,$rg,$cpf,$dataNasc){
			$query = "insert into professor(matricula,nome,email,senha,sexo,rg,cpf,dataNasc)values('{$matricula}','{$nome}','{$email}',
					'{$senha}','{$sexo}','{$rg}','{$cpf}','{$dataNasc}')";
			
			return mysqli_query($conexao,$query);
	}

	function login($conexao,$matriculaAluno,$senha){
	 	$query2 = "insert into login(user,senha)values('{$matriculaAluno}','{$senha}')";

	 	return mysqli_query($conexao,$query2);
	 }

	  if(InsereProf($conexao,$matricula,$nome,$email,$senha,$sexo,$rg,$cpf,$dataNasc)&&login($conexao,$matricula,$senha)){
	 	echo "Sucesso";
	 	header("Location: menuProf.php");
	 	die();
	 }else{
	 	$msg = mysqli_error($conexao);
	 	echo $msg;
	 }



?>