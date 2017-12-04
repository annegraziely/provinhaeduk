<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
	<div id="form-container">
     <div class="panel" id="form-box">
         <form action="login2.php" method="post">
             <h1 class="text-center">Login</h1>

             <div class="form-group">
                 <label class="sr-only" for="login">Usuário</label>
                 <div class="input-group">
                     <div class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                     </div>
                     <input type="text" name="user" class="form-control" placeholder="Digite seu login">
                 </div>
             </div>

             <div class="form-group">
                 <label class="sr-only" for="senha">Senha</label>
                 <div class="input-group">
                     <div class="input-group-addon">
                         <span class="glyphicon glyphicon-lock"></span>
                     </div>
                     <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                 </div>
             </div>

             <div class="form-group">
                 <input type="submit" value="Entrar" class="btn btn-success form-control">
             </div>
         </form>
     </div>
     </div>





    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>