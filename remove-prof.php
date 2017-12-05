<?php include("conecta.php");

header('Content-Type:'."text/plain");

$id = $_POST['id'];
removeProfessor($conexao,$id);


function removeProfessor($conexao,$id){
	$query = "delete from professor where matricula = {$id}";
	return mysqli_query($conexao,$query);
}


 