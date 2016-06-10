## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

## Para configurar Api,

##Primeiro acertar configurações do Db

	{'mysql' => [
		            'driver'    => 'mysql',
		            'host'      => env('DB_HOST', 'localhost'),
		            'database'  => env('DB_DATABASE', 'api_sintegra'),
		            'username'  => env('DB_USERNAME', 'root'),
		            'password'  => env('DB_PASSWORD', 'root'),}

##Criar Database
apos configurar o banco, criar database api_sintegra

##Criar Tabelas 

Use o comando 

$ php artisan migrate

##Rota

Para acessar o form a rota e a "/"


