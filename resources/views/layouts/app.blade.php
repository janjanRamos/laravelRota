<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Mais que Contabilidade em Natal/RN confiança - ELITE Consultores</title>
	<link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
	<script type="text/javascript">
		function generateEmail()
    	{
       		document.getElementById('email').value = 
        	document.getElementById('emaillocal').value + 
			document.getElementById('elite').innerText;
   		}
	</script>
	
	<style>
		body {
			font-family: 'Raleway';
		}

		.fa-btn {
			margin-right: 6px;
		}

		.table-text div {
			padding-top: 6px;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
     		<img alt="Brand" src="{!! asset('img/logo.png')  !!}" style="width: 55%; position:relative; left: 25px;">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     	<ul class="nav navbar-nav navbar-right">
			<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<li><a href="/deliveries"><i class="fa fa-btn fa-paperclip"></i>Serviços Externos</a></li>
							<li><a href="/auth/register"><i class="fa fa-btn fa-user"></i>Registrar</a></li>
							<li><a href="/auth/login"><i class="fa fa-btn fa-sign-in"></i>Entrar</a></li>
						@else
							<li><a href="/deliveries"><i class="fa fa-btn fa-paperclip"></i>Serviços Externos</a></li>
							<li><a href="/tabletasks"><i class="fa fa-btn fa-list-alt"></i>Consultar Atendimentos</a></li>
							<li><a href="/tasks"><i class="fa fa-btn fa-phone-square"></i>Abrir Atendimento</a></li>	
							<li class="navbar-text"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}</li>
							<li><a href="/auth/logout"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
						@endif
					</ul>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	@yield('content')
</body>
</html>
