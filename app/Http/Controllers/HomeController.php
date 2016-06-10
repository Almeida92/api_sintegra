<?php

namespace api_sintegra\Http\Controllers;

use Illuminate\Http\Request;

use api_sintegra\Http\Requests;
use api_sintegra\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		return view('app.home');
	}
}
