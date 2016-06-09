@extends('layout.auth')
@section('title', 'Login page')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Sign in</h1>
        </div>
        <form class="form" action="/auth/login" method="post">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="mail">E-mail Address</label>
                <input id="mail" class="form-control" type="text" name="email" value="{{ old('email')  }}"/>
            </div>

            <div class="form-group">
                <label for="pass">Password</label>
                <input id="pass" class="form-control" type="password" name="password"/>
            </div>
            <div class="form-group">
            	<label for="rm">Remember Me</label>
            	<input id="rm" class="checkbox" type="checkbox" name="remember_me">
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-primary pull-right" type="submit">Sign in</button>
            </div>
        </form>
        <a href="/auth/register">Registre-se</a>
    </div>
@endsection