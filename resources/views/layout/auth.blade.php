<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Consulta Sintegra - Es</title>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		.container{
			width: 800px;
			margin-right: auto;
			margin-left: auto;
		}
	</style>
</head>
<body>

<div class="container">
	
	<ul class="nav navbar-nav navbar-right">
		<li class=""></li>
		@if (Auth::guest())
			<li><a href="/auth/login">Login</a></li>
			<li><a href="/auth/register">Register</a></li>
		@else
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				{{ Auth::user()->name }}
				<span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="/auth/logout">Logout</a></li>
				</ul>
			</li>
		@endif
	</ul>
	@yield('content')
</div>
</body>
</html>