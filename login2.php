<?php include("conecta.php"); ?>

<?php

$user = $_POST['user'];
$senha= $_POST['senha'];


echo "Entrou";

 function autenticacao($conexao,$user,$senha){

 	$sql = "select * from aluno where matricula = '$user' and senha='$senha'";
 	
 	$result = mysqli_query($conexao,$sql);

 	 $row = mysqli_num_rows($result);

 	 if($row>0){
 	 	session_start();
 	 	$_SESSION['user']=$_POST['user'];
 		$_SESSION['senha']=$_POST['senha'];
 		echo "Autenticado com sucesso!";
 		header("Location: menu.php");
 		die();


 	}else{
 		echo ("erro");
 		header("Location: login.php");
 		die();
 	}

 }

 autenticacao($conexao,$user,$senha);
 		
 		