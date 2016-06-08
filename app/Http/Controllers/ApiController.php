<?php

namespace api_sintegra\Http\Controllers;

use Illuminate\Http\Request;

use api_sintegra\Http\Requests;
use api_sintegra\Http\Controllers\Controller;



class ApiController extends Controller
{
    //


    public function consulta(Request $request){

    	
    	$cnpj = $request->input('num_cnpj');

    	
    	$content =http_build_query(array(
    		'num_cnpj'=> $cnpj,
    		'botao'	  => 'Consultar')
    	);
    	
    	$context = stream_context_create(array(
    		'http' =>array(
    			'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                    "Content-Length: ".strlen($content)."\r\n".
                    "User-Agent:MyAgent/1.0\r\n",
    			'method' =>'POST',
    			'content'=> $content
    			)
    		)
    	);
    	
    	$result = file_get_contents('http://www.sintegra.es.gov.br/resultado.php',NULL,$context);

        $dom = new DOMDocument ( '1.0' );
    		
    	//print_r($result);


    }

}
