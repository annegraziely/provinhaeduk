<?php include("conecta.php"); ?>

<?php
	
	header('Content-Type:'."text/plain");
	
		$professores=[];
		$sql = mysqli_query($conexao,"select * from professor");
		$row = mysqli_num_rows($sql);

		if(!$sql){
			echo '[{"Erro":"Há algum erro com a busca."';
			echo '}]';
		}else if($row<1){
			echo '[{"Erro":"Não há nenhum dado cadastrado"';
			echo '}]';
		}else{
			while ($professor = mysqli_fetch_assoc($sql)) {
		 	array_push($professores, $professor);

			
		}
		echo json_encode($professores, JSON_PRETTY_PRINT);
		
	}
	


