<?php namespace api_sintegra\Http\Controllers;

class HomeController extends Controller {
	public function __construct()
	{
	$this->middleware(’auth’);
	}
	public function index()
	{
	return view(’home’);
	}
}