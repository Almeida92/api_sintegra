@extends('layout.auth')
@section('title', 'Sign up')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Sign up</h1>
        </div>
        <form class="form" action="/auth/register" method="post">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="fn">Nome</label>
                <input id="fn" class="form-control" type="text" name="nome" value="{{ old('nome')  }}"/>
            </div>

            <div class="form-group">
                <label for="ln">Sobrenome</label>
                <input id="ln" class="form-control" type="text" name="sobrenome" value="{{ old('sobrenome')  }}"/>
            </div>

            <div class="form-group">
                <label for="mail">Email</label>
                <input id="mail" class="form-control" type="text" name="email" value="{{ old('email')  }}"/>
            </div>

            <div class="form-group">
                <label for="pass">Senha</label>
                <input id="pass" class="form-control" type="password" name="senha"/>
            </div>
            <div class="form-group">
                <label for="cp">Confirme sua Senha</label>
                <input id="cp" class="form-control" type="password" name="confirmacao_senha"/>
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-primary pull-right" type="submit">Registrar</button>
            </div>
        </form>
        <a href="/auth/login">Voltar</a>
    </div>
@endsection