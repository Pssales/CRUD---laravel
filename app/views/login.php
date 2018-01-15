<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

   <link rel="stylesheet"  href="public/css/bootstrap.min.css">

   <link rel="stylesheet"  href="public/css/login.css">
	
</head>
<body>
   <div class="login-form col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4"> 
     	<header> 
      		<h2 class="text-center">Entre com seu <b>usuário</b> e <b>senha</b></h2> 
      </header> 
   	<form action="{{url('/')}}"> 
   		<div class="form-group"> 
   			<div class="input-group"> 
   				<div class="input-group-addon"> 
   					<span class="glyphicon glyphicon-user"></span> 
   				</div> 
   				<input type="text" name="usuario" class="form-control" placeholder="Usuário"> 
   			</div> 
   		</div> 
  
   		<div class="form-group"> 
   			<div class="input-group"> 
   				<div class="input-group-addon"> 
   					<span class="glyphicon glyphicon-option-horizontal"></span> 
   				</div> 
   				<input type="password" name="senha" class="form-control" placeholder="Senha"> 
   			</div> 
   		</div> 
  
   		<footer> 
   			<button type="submit" class="btn btn-primary pull-right">Entrar</button> 
   		</footer> 
   	</form> 
   </div> 

	<script src="public/js/jquery-3.2.1.slim.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
</body>
</html>