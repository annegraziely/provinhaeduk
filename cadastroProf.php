<?php include("conecta.php");?>

<?php
	$matricula = $_GET['matriculaProf'];
	$nome =$_GET['nomeProf'];
	$email = $_GET['emailProf'];
	$senha = $_GET['senhaProf'];
	$sexo = $_GET['sexoProf'];
	$rg = $_GET['rgProf'];
	$cpf = $_GET['cpfProf'];
	$dataNasc = $_GET['dataNascProf'];


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