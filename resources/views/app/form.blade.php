@extends('layout.master')
@section('content')

		<form class="form-inline" action="/api" method="post">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		  <div class="form-group">
		    <label for="cnpj">CNPJ</label>
		    <input type="text" class="form-control" id="cnpj" name="num_cnpj" placeholder="CNPJ">
		  </div>

		  <button type="submit" class="btn btn-primary">Consultar</button>
		</form>
@endsection