<?php include("conecta.php"); 

	$nome = $_GET['nome'];
	$nota = $_GET['nota'];
	$status = $_GET['status'];
	

	//echo $nota;
	gerarRel($nome,$nota,$status);
	
		use Dompdf\Dompdf;

	function gerarRel($nome,$nota,$status){
				
		require_once 'dompdf/autoload.inc.php';

		$dompdf = new DOMPDF();
		$dompdf->load_html('
			<h1>Relatório de Desempenho do Aluno</h1>
			<br>
			<p>Aluno: '.$nome.'</p>
			<p>Nota: '.$nota.' </p>
			<p>Status: '.$status.' </p>



			');	
		$dompdf->render();
		$dompdf->stream("RelatorioAluno",array("Attachment"=>true));

	}

