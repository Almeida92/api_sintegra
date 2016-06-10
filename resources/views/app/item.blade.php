@extends('layout.master')
@section('content')

<h3>CNPJ: {{$result->cnpj}}</h3>
<p style="text-align:justify; with: 600px;">
	
	{{$result->json}}
</p>
<a class="btn btn-primary" href="/">Voltar</a>
@endsection