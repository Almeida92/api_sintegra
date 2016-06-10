<?php

namespace api_sintegra\Http\Controllers;

use Illuminate\Support\Facades\Request;

use Requests;
use api_sintegra\Http\Controllers\Controller;

use Auth;


class LoginController extends Controller
{
    //
	public function login()
	{
	    $credenciais = Request::only('email', 'password');

	    if(Auth::attempt($credenciais)) {
	        return "Usuário NOME logado com sucesso";
	    };
	
	    return "As credencias não são válidas";
	}
}
