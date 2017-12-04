<?php include("conecta.php"); ?>
<?php include("listaDesempenho.php"); ?>
<?php include("conectado.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Desempenho de Aluno</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
		
<div id="banner">
	<div class="banner_2" id="fontBanner_2">
	<p>PROVINHA EDUKAR</p>
	</div>
 </div>
 
<nav class="navbar navbar-inverse" id="navbar">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#banner" id="navbarFont">Aluno</a>
                    </div>

                    <div class="collapse navbar-collapse" id="nav-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="menu.php" id="navbarFont">Home</a></li>
                            <li><a href="menuAluno.php" id="navbarFont">Aluno</a></li>
                            <li><a href="exerc1.php" id="navbarFont">Provinha</a></li>
                            <li><a href="destroy.php" id="navbarFont">SAIR</a></li>
                        </ul>
                    </div>
                </div>
</nav>
	
	
	<button  class="bntModal" data-toggle="modal" data-target=".desempenho" style="margin-left: 550px">Habilidades</button>

<div class="modal fade desempenho"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 600px;">
    <div class="modal-content">
    	<div class="modal-header" style="background-color: #CDC9C9;border-radius: 5px;">
    		 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    		<h4 class="modal-title" >Habilidades</h4>
    	</div>

    	<div class="modal-body">
			<form class="form-inline" action="listaDesempenho.php">
  				<div class="form-group">
	    			<label for="exampleInputName2">Nome</label>
					<input type="text" class="form-control" placeholder="Thiago Araujo">
    			</div>

    			<a id="listarAlunos" class="btn btn-default"  href="#" role="button" >Buscar</a>
    		
    		<br><br>
    		<table id="tabAlunos" class="table table-hover">
				<tr>
					<td><b>Nome</b></td>
					<td><b>Nota</b></td>
					<td><b>Status</b></td>
					<td><b>Gerar Relatório</b></td>
				</tr>
				<?php
				$alunos = ListaStatus($conexao);
					foreach ($alunos as $aluno) { ?>
	 			<tr>
	 				<td><?php echo $aluno['nome']; ?></td>
	 				<td><?php echo $aluno['nota']; ?></td>
	 				<td><?php echo $aluno['status']; ?></td>
	 				<td><a href="gerarPDF.php?nome=<?=$aluno['nome']?>&nota=<?=$aluno['nota']?>&status=<?=$aluno['status']?>" class="text-danger">Gerar PDF</a>
	 				</td>
	 			</tr>
	 				
	 			<?php	} ?>
			</table>

		 	<div class="modal-footer" style="background-color: #CDC9C9;margin-top: 15px;">	
		 	
    		<button type="button" class="btn btn-default" id="bntFechar" data-dismiss="modal">Fechar</button>
    		</div>
			</form>
    	</div>    


    </div>
  </div>
</div>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	

</body>
</html>