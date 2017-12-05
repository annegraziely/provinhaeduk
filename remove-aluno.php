<?php include("conecta.php"); 

header('Content-Type:'."text/plain");

$id = $_POST['idAluno'];
removeAluno($conexao,$id);


function removeAluno($conexao,$id){
	$query = "delete from aluno where matricula = {$id}";
	return mysqli_query($conexao,$query);
}


//header("Location: menuAluno.php?removido=true");
//die();

