<?php include("conecta.php"); ?>
<?php include("conectado.php"); ?>
  
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Aluno</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- 	<script src="js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/listar.js"></script>
	<script type="text/javascript" src="js/cadastrar.js"></script>

</head>	
<body>
		
<header>
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
</header>
<!-- Large modal -->
<button type="button" class="bntModal" id="bnt" data-toggle="modal" data-target=".cadastrar">Cadastrar Aluno</button>
<button  class="bntModal" data-toggle="modal" data-target=".consultar">Consultar Aluno</button>

<!--modal do botão cadastrar aluno-->

<div class="modal fade cadastrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 600px;">
    <div class="modal-content">
    	<div class="modal-header" style="background-color: #CDC9C9;border-radius: 5px;">
    		 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    		<h4 class="modal-title" >Dados do Cadastro</h4>
    	</div>
    	<div class="modal-body">
			<form id="cadastrarAluno" method="post" action="cadastroAluno.php">
				<div class="form-group">
				<label for="matriculaAluno">Matricula:</label>
				<input type="number" class="form-control" id="matriculaAluno" name="matriculaAluno" placeholder="Matricula" style="width: 100px" required oninput="check(this)">
			  	
				<label for="nomeAluno" style="margin-top: 15px;">Nome:</label>
				<input type="text" class="form-control" id="nomeAluno" name="nomeAluno" placeholder="Nome" title="Preencha o campo Nome"  style="width: 550px" required>

			    <label for="dataNascAluno" style="margin-top: 15px">Data de Nascimento:</label>
			 	<input type="date" class="form-control" id="dataNascAluno" name="dataNascAluno" style="width: 200px">

			    <label for="sexoAluno" style="margin-top: 15px;">Sexo:</label>
				</div>
			    <div class="radio">
				  <label>
				    <input type="radio" name="sexoAluno" id="sexoAluno" value="feminino" checked>
				    Feminino
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="sexoAluno" id="sexoAluno" value="masculino">
				    Masculino
				  </label>
				</div>
				<label for="serieAluno">Série:</label>
				<select name="serie" id="serie" class="form-control">
				  <option value="1">1</option>
				  <option value="2">2</option>
				</select>

			
			<div class="modal-footer" style="background-color: #CDC9C9;margin-top: 15px;">
    		<button id="bntForm" type="submit" class="btn btn-default" >Salvar</button>
    		<button type="button" class="btn btn-default" id="bntFechar" data-dismiss="modal">Fechar</button>
    		</div>
    		</form>
    	</div>    


    </div>
  </div>
</div>

<!--modal do botão consultar aluno-->

<div class="modal fade consultar"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 600px;">
    <div class="modal-content">
    	<div class="modal-header" style="background-color: #CDC9C9;border-radius: 5px;">
    		 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    		<h4 class="modal-title" >Consulta de Alunos</h4>
    	</div>
    	<div class="modal-body">
			<form class="form-inline" action="listarAluno.php">
  				<div class="form-group">
	    			<label for="exampleInputName2">Nome</label>
					<input type="text" class="form-control" placeholder="Thiago Araujo">
    			</div>

    			<a id="listarAlunos" class="btn btn-default"  href="#" role="button" >Buscar</a>
    			<h5></h5>
    		
    		<table id="minhaTabela" class="table table-hover">
				<caption>Dados de Alunos</caption>
				<thead>
					<th>Nome</th>
					<th>Matricula</th>
					<th>Serie</th>
					<th></th>
				</thead>
				<tbody>
				</tbody>
			</table>


		 	<div class="modal-footer" style="background-color: #CDC9C9;margin-top: 15px;">	
		 	<!-- <button type="submit" class="btn btn-default" id="bntForm">Salvar</button> -->
    		<button type="button" class="btn btn-default" id="bntFechar" data-dismiss="modal">Fechar</button>
    		</div>
    		</form>

    	</div>    	
    </div>
  </div>
</div>
<!-- -->


		<!--<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>-->
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/cadastrar.js"></script>
        <script type="text/javascript" src="js/excluir.js"></script>
		<!-- <script type="text/javascript" src="js/script.js"></script> -->
		
		
</body>
</html>