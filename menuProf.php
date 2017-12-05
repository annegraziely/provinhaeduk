<?php include("conectado.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Professor</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/listarProf.js"></script>

</head>	
<body>
		<script type="text/javascript" src="js/menuProf.js"></script>

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
                        <a class="navbar-brand" href="#banner" id="navbarFont">Professor</a>
                    </div>

                    <div class="collapse navbar-collapse" id="nav-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="menu.php" id="navbarFont">Home</a></li>
                            <li><a href="menuAluno.php" id="navbarFont">Aluno</a></li>
                            <li><a href="exerc1.php" id="navbarFont">Provinha</a></li>
                            <li><a href="desempenho.php" id="navbarFont">Desempenho</a></li>
                            <li><a href="destroy.php" id="navbarFont">Sair</a></li>
                        </ul>
                    </div>
                </div>
</nav>

<!-- Large modal -->
<button type="button" class="bntModal" id="bnt" data-toggle="modal" data-target=".cadastrar">Cadastrar Professor</button>
<button  class="bntModal" data-toggle="modal" data-target=".consultarProf">Consultar Professor</button>

<!--modal do botão cadastrar professor-->
<div class="modal fade cadastrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 600px;">
    <div class="modal-content">
	    	<div class="modal-header" style="background-color: #CDC9C9;border-radius: 5px;">
	    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    		<h4 class="modal-title" >Dados do Cadastro</h4>
	    	</div>
	    	<div class="modal-body">
			<form id="formProf" method="post" action="">
					<div class="form-group">
					<label for="matriculaProf">Matricula:</label>
					<input type="number" class="form-control" id="matriculaProf" name="matriculaProf" placeholder="Matricula" style="width: 100px" required oninput="check(this)">
				  	
					<label for="nomeProf" style="margin-top: 15px;">Nome:</label>
					<input type="text" class="form-control" id="nomeProf" name="nomeProf" placeholder="Nome" title="Preencha o campo Nome"  style="width: 550px" required>

					<label for="emailProf" style="margin-top: 15px;">Endereço de e-mail:</label>
				    <input type="email" class="form-control" id="emailProf" name="emailProf" placeholder="E-mail" required style="width: 550px">

				    <label for="emailProfRepit" style="margin-top: 15px;">Endereço de e-mail:</label>
				    <input type="email" class="form-control" id="emailProfRepit" autocomplete="off" name="emailProfRepit" placeholder="E-mail" required style="width: 550px" oninput="checkEmail(this)">

				    <label for="senhaProf" style="margin-top: 15px;">Senha:</label>
				    <input type="password" class="form-control" id="senhaProf" name="senhaProf" placeholder="******" style="width: 550px">

				    <label for="dataNascProf" style="margin-top: 15px">Data de Nascimento:</label>
				 	<input type="date" class="form-control" id="dataNascProf" name="dataNascProf" style="width: 200px">

				    <label for="sexoProf" style="margin-top: 15px;">Sexo:</label>
					</div>

			    <div class="radio">
				  <label>
				    <input type="radio" name="sexoProf" id="sexoProf" value="feminino" checked>
				    Feminino
				  </label>
				</div>

				<div class="radio">
				  <label>
				    <input type="radio" name="sexoProf" id="sexoProf" value="masculino">
				    Masculino
				  </label>
				</div>

			  	
					<label for="rgProf" style="margin-top: 15px;">RG:</label>
					<input type="number" class="form-control" id="rgProf" name="rgProf" placeholder="rg">
				  	
				  	<label for="cpfProf" style="margin-left: 20px">CPF:</label>
					<input type="text" class="form-control" id="cpfProf" name="cpfProf" required pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" title="Somente números!" onkeypress="formatar('###.###.###-##', this)" placeholder="cpf">
				

					<div class="modal-footer" style="background-color: #CDC9C9;margin-top: 15px;">
		    			<button type="submit" class="btn btn-default" id="bntForm">Salvar</button>
			    		<button type="button" class="btn btn-default" id="bntFechar" data-dismiss="modal">Fechar</button>
    				</div>
    		</form>

    	</div>   

    </div>
  </div>
</div>

<!--modal do botão consultar professor-->

<div class="modal fade consultarProf"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document" style="width: 600px;">
    <div class="modal-content">
    	<div class="modal-header" style="background-color: #CDC9C9;border-radius: 5px;">
    		 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    		<h4 class="modal-title" >Consulta de Professores</h4>
    	</div>
    	<div class="modal-body">
			<form class="form-inline">
  				<div class="form-group">
	    			<label for="exampleInputName2">Nome</label>
					<input type="text" class="form-control" placeholder="Thiago Araujo">
    			</div>

    			<a id="listarAlunos" class="btn btn-default"  href="#" role="button" >Buscar</a>
    		
    		<h5></h5>
    		
    		<table id="minhaTabela" class="table table-hover">
				<caption>Dados de Professores</caption>
				<thead>
					<th>Nome</th>
					<th>Matricula</th>
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
		<!--<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>-->
		<!--<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>-->
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/cadastrarProf.js"></script>
        <script type="text/javascript" src="js/excluirProf.js"></script>
		<!-- <script type="text/javascript" src="js/script.js"></script> -->
		
</body>
</html>