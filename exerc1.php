<?php include("conectado.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/dragdrop.css">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #8B8989;">
  <div class="container">
    <p class="navbar-text" id="css">Arraste o desenho a palavra correspodente</p>
  </div>
	</nav>

	<span id="end"></span>
	<h1 style="margin-top: 170px;margin-left: 20px; margin-bottom: 10px">Provinha 1 <span id="" ></span></h1> 


<div id="dropzone" class="tela-esq">

<div class="destino"  >
	<div id="drop-abacaxi" class="drop"  ondragover="allowDrop(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ondrop="drop(event)"></div>
</div>
<div class="destino">
	<div id="drop-foguete" class="drop" ondragover="allowDrop(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ondrop="drop(event)"></div>
</div>
<div class="destino">
	<div id="drop-dado" class="drop" ondragover="allowDrop(event)" ondragenter="dragEnter(event)"  ondragleave="dragLeave(event)" ondrop="drop(event)"></div>
</div>
<div class="destino1">
	<div id="drop-morango" class="drop" ondragover="allowDrop(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ondrop="drop(event)"></div>
</div>
<div class="destino1">
	<div id="drop-elefante" class="drop" ondragover="allowDrop(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ondrop="drop(event)"></div>
</div>
<div class="destino1">
	<div id="drop-rato" class="drop" ondragover="allowDrop(event)" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ondrop="drop(event)"></div>
</div>
	
	
</div>



<div id="origem" class="tela-dir">
	<div class="colum-dir" draggable="true" ondragstart="drag(event)">
	<table>
		<tr>
			<td><img id="drag-rato" class="img" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" src="img_2/rato2.png"></td>
			<td><img id="drag-foguete" class="img" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" src="img_2/foguete.png"></td>
			<td><img id="drag-elefante" class="img" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" src="img_2/elefante.png"></td>
		</tr>
		<tr>
			<td><img id="drag-abacaxi" class="img" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" src="img_2/abacaxi.png"></td>		
			<td><img id="drag-morango" class="img" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" src="img_2/morango.png"></td>
			<td><img id="drag-dado" class="img" draggable="true" ondragstart="drag(event)" ondragend="dragEnd(event)" src="img_2/dado.jpg"></td>
		</tr>
		</table>
	</div>
</div>




	<form class="form-inline" action="status.php" style="margin-top: 530px; margin-left: 40px;">
  				<div class="form-group">
	    			<label>Nota</label>
	      			<input id="pontos" type="text" name="pontos"  class="form-control">
				</div>
  				<div class="form-group">
	    			<label for="exampleInputName2">Professor</label>
					<input type="text" class="form-control" placeholder="Anne Graziely">
    			</div>
    			
				<button type="submit" class="btn btn-default" id="bntForm">Salvar</button>
	</form>

					




	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<script type="text/javascript" src="js/dragdrop.js"></script>
</body>
</html>