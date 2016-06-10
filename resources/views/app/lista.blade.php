<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Api - Sintegra</title>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<table class="table" >
	<tr>
		<td>
			ID
		</td>
		<td>
			Cnpj
		</td>
		<td>
			Json
		</td>

		<td>
			
		</td>
	</tr>
	@foreach($lista as $item)
		<tr>
			<td>
				{{$item->id}}
			</td>
			<td>
				{{$item->cnpj}}
			</td>
			<td>
				{{$item->json}}
			</td>
			<td>
				<a href="/api/excluir/{{$item->id}}" class="btn btn-danger">Excluir</a>
			</td>
		</tr>
	@endforeach
</table>
</body>
</html>