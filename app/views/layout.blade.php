<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>@yield('titulo')</title>

	<link rel="stylesheet"  href="{{asset('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet"  href="{{asset('public/css/index.css')}}">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $("input").blur(function(){
		    	if($(this).val() == ""){
		            $(this).css({"border" : "1px solid #F00", "padding": "2px"});
		        }else{
		        	$(this).css({"border" : "1px solid #99FF99", "padding": "2px"});
		        }
		    });
		});
	</script>

</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"> 
		          <span class="icon-bar"></span> 
		          <span class="icon-bar"></span> 
		          <span class="icon-bar"></span> 
	            </button> 

				<a href="index.html" class="navbar-brand logotipo">
					
				</a>
			</div>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav">
					<li><a href="{{url('vendas')}}">Vendas</a></li>
					<li ><a href="{{url('clientes')}}">Clientes</a></li>
					<li><a href="{{url('produtos')}}">Produtos</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Minha Conta
							<span class="caret"></span>
						</a>
						<div class="dropdown-menu perfil">
						<div class="col-sm-4 hidden-xs">
							
						</div>
							<ul class="list-unstyled">
								<li>Fulano</li>
								<li><a href="">Alterar Perfil</a></li>
								<li><a href="">Sair</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

   @yield('conteudo')

	<script src="{{asset('public/js/jquery-3.2.1.slim.min.js')}}"></script>
	<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/js/main.js')}}"></script>

	<script language="JavaScript" type="text/javascript" src="{{asset('public/js/jquery.maskedinput.min.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function () {
		   $("#data").mask("9999/99/99",{placeholder:"yyyy/mm/dd"});
		   $("#cpf").mask("999.999.999-99");
		   $("#tel").mask("(99) 9999-9999");
		   $("#cep").mask("99999-999");
		   $("#preco").mask("99,99");
		});
	</script>

</body>
</html>