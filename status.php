<?php include("conecta.php");?>
<?php include("conectado.php");


	$nota = $_GET['pontos'];
	
	//$alunoID = 3;
	$alunoID = $_SESSION["user"];


function InsereStatus($conexao, $nota, $status, $alunoID){

	 $query = "insert into status(nota,status,alunoID)values('{$nota}','{$status}','{$alunoID}')";

	return mysqli_query($conexao,$query);
	
	 }

	 if($nota>4){
	 	$status = "Aluno sabe ler";
	 }else{
	 	$status = "Aluno não sabe ler";
	 }



	 if(InsereStatus($conexao, $nota, $status, $alunoID)){
	 	echo "Sucesso";
	 	header("Location: menu.php");
	 	die();
	 }else{
	 	$msg = mysqli_error($conexao);
	 	echo $msg;
	 }

