<?php include("conecta.php"); 


$id = $_GET['id'];
removeAluno($conexao,$id);


function removeAluno($conexao,$id){
	$query = "delete from alunos where id = {$id}";
	return mysqli_query($conexao,$query);
}


header("Location: menuAluno.php?removido=true");
die();

