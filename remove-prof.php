<?php include("conecta.php");


$id = $_GET['id'];
removeProfessor($conexao,$id);


function removeProfessor($conexao,$id){
	$query = "delete from professor where matricula = {$id}";
	return mysqli_query($conexao,$query);
}


header("Location: menuProf.php?removido=true");
die();

