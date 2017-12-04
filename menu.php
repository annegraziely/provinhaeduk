<?php include("conectado.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<meta charset="utf-8">
	 <!-- <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>  -->

  <link  href="css/bootstrap.min.css" rel="stylesheet">
 	<!-- <script src="js/bootstrap.min.js"></script>  -->
	
	<link  type="text/css" href="style.css" rel="stylesheet">


	<script>
	

	window.onload = function(){


		function fadeInOut(){

				$("#fontBanner_2").fadeIn(2000).fadeOut(2000).fadeIn(2000).fadeOut(2000);
		

			setTimeout(fadeInOut,500);				
			}

			fadeInOut();


	};
</script>

</head>
<body>
<header>


<div id="banner" style="background-color: #CDC9C9">
	<div class="banner_2" id="fontBanner_2" style="background-color: #8B8989">
	<p>PROVINHA EDUKAR</p>
	</div>
 </div>
 
<nav class="navbar navbar-inverse" id="navbar" >
                 <div class="container-fluid"> 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" id="navbarFont">HOME</a>
                    </div> 

                    <div class="collapse navbar-collapse" id="nav-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="menuProf.php" id="navbarFont">Professor</a></li>
                            <li><a href="menuAluno.php" id="navbarFont">Aluno</a></li>
                            <li><a href="exerc1.php" id="navbarFont">Provinha</a></li>
                            <li><a href="desempenho.php" id="navbarFont">Desempenho</a></li>
                            <li><a href="destroy.php" id="navbarFont">Sair</a></li>
                        </ul>
                    </div>
                </div> 
</nav>
</header>

<div class="row">
  <div class="col-md-6"><img src="img/08.jpg" alt="..." class="img-thumbnail"></div>
  <div class="col-md-6" style="margin-top: 100px;margin-left: -50px">
  	<h3>"Só é possível ensinar uma criança a amar, amando-a."</h3>
  	<h5>Johann Goethe</h5>
  </div>
</div>
<div class="row">
  <div class="col-md-6"><img src="img/09.jpg" alt="..." class="img-thumbnail"></div>
  <div class="col-md-6" style="margin-top: 100px;margin-left: -50px">
  	<h3>"Toda a educação assenta nestes dois princípios: primeiro repelir o assalto fogoso das crianças ignorantes à verdade e depois iniciar as crianças humilhadas na mentira, de modo insensível e progressivo."</h3>
  	<h5>Franz Kafka</h5>
  </div>
</div>
<div class="row">
  <div class="col-md-6"><img src="img/14.jpg" alt="..." class="img-thumbnail"></div>
  <div class="col-md-6" style="margin-top: 100px;margin-left: -50px">
  	<h3>"Precisamos ensinar à próxima geração de crianças, a partir do primeiro dia, que eles são responsáveis por suas vidas. A maior dádiva da espécie humana, e também sua maior desgraça, é que nós temos livre arbítrio. Podemos fazer nossas escolhas baseadas no amor ou no medo."</h3>
  	<h5>Elizabeth Kubler-Ross</h5>
  </div>
</div>
<div class="row">
  <div class="col-md-6"><img src="img/10.jpg" alt="..." class="img-thumbnail"></div>
  <div class="col-md-6" style="margin-top: 100px;margin-left: -50px">
  	<h3>"Eduquem as crianças, para que não seja necessário punir os adultos."</h3>
  	<h5>Pitágoras</h5>
  </div>
</div>
<div class="row">
  <div class="col-md-6"><img src="img/11.jpg" alt="..." class="img-thumbnail"></div>
  <div class="col-md-6" style="margin-top: 100px;margin-left: -50px">
  	<h3>"Ensinar não é transferir conhecimento, mas criar as possibilidades para a sua própria produção ou a sua construção."</h3>
  	<h5>Paulo Freire</h5>
  </div>
</div>
<div class="row">
  <div class="col-md-6"><img src="img/13.jpg" alt="..." class="img-thumbnail"></div>
  <div class="col-md-6" style="margin-top: 100px;margin-left: -50px">
  	<h3>"Se a educação sozinha não transforma a sociedade, sem ela tampouco a sociedade muda."</h3>
  	<h5>Paulo Freire</h5>
  </div>
</div>
<div class="row">
  <div class="col-md-6"><img src="img/06.jpg" alt="..." class="img-thumbnail"></div>
  <div class="col-md-6" style="margin-top: 100px;margin-left: -50px">
  	<h3>"Ninguém caminha sem aprender a caminhar, sem aprender a fazer o caminho caminhando, refazendo e retocando o sonho pelo qual se pôs a caminhar."</h3>
  	<h5>Paulo Freire</h5>
  </div>
</div>
<div class="row">
  <div class="col-md-6"><img src="img/16.jpg" alt="..." class="img-thumbnail"></div>
  <div class="col-md-6" style="margin-top: 100px;margin-left: -50px">
  	<h3>"Não é no silêncio que os homens se fazem, mas na palavra, no trabalho, na ação-reflexão"</h3>
  	<h5>Paulo Freire</h5>
  </div>
</div>
<div class="row">
  <div class="col-md-6"><img src="img/05.jpg" alt="..." class="img-thumbnail"></div>
  <div class="col-md-6" style="margin-top: 100px;margin-left: -50px">
  	<h3>"Não há saber mais ou saber menos: Há saberes diferente"</h3>
  	<h5>Paulo Freire</h5>
  </div>
</div>

    
     <!-- <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>  -->
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="js/script.js"></script> -->
    
		
</body>
</html>