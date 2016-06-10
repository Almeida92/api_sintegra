<?php

namespace api_sintegra\Http\Controllers;

use Illuminate\Http\Request;

use api_sintegra\Http\Requests;
use api_sintegra\Http\Controllers\Controller;
use api_sintegra\Sintegra;

class AppController extends Controller
{
	public function form(){

		return view('app.form');
	}

	public function lista(){
		$lista = Sintegra::all();

		return view('app.lista',['lista'=>$lista]);
	}

}
