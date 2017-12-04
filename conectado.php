<?php include("conecta.php");


session_start();

if(!isset($_SESSION["user"])|| !isset($_SESSION["senha"])){
	header("Location:login.php");
	exit;
}else{
	//echo "LOGADO";
}

