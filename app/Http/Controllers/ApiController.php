<?php

namespace api_sintegra\Http\Controllers;

use Illuminate\Http\Request;

use api_sintegra\Http\Requests;
use api_sintegra\Http\Controllers\Controller;
use Symfony\Component\DomCrawler\Crawler;
use api_sintegra\Sintegra;



class ApiController extends Controller
{
    //


    public function consulta(Request $request){

    	/**
        *    
        * Cnpj passado para requisição 
        *
        */
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

        $crawler = new Crawler($result);
    	
        //Parser com Regex 

        $attributes = $crawler
        ->filterXpath('//table/tr/td')
        ->extract(array('_text', 'class'));

        $infoarray = array(
            'cnpj'                  => preg_replace('/[-.\/]/','' , $attributes[4][0]),
            'Inscrição Estadual'    => preg_replace('/[-.]/','' , $attributes[6][0]),
            'Razão Social'          => preg_replace('/[^\x00-\x7F]/','' , $attributes[8][0]),
            'Endereço' =>[
                        'Logradouro'    => preg_replace('/[^\x00-\x7F]/','' , $attributes[11][0]),
                        'Numero'        => $attributes[13][0],
                        'Bairro'        => preg_replace('/[^\x00-\x7F]/','' , $attributes[17][0]),
                        'Município'     => preg_replace('/[^\x00-\x7F]/','' , $attributes[19][0]),
                        'UF'            => preg_replace('/[^\x00-\x7F]/','' , $attributes[21][0]),
                        'CEP'           => preg_replace('/[-]/','' , $attributes[23][0])
                ],
            'INFORMAÇÕES COMPLEMENTARES' =>[
                        'Atividade Econômica'           => preg_replace('/[^\x00-\x7F]/','' ,$attributes[28][0]),
                        'Data de Inicio de Atividade'   => preg_replace('/[^\x00-\x7F]/','' ,$attributes[30][0]),
                        'Situação Cadastral Vigente'    => preg_replace('/[^\x00-\x7F]/','' ,$attributes[32][0])
                ]
            );


        //Inserindo respota JSON no banco  

        $consulta = new Sintegra;
        $consulta->id_usuario = 10;
        $consulta->cnpj = $infoarray['cnpj'];
        $consulta->json = json_encode($infoarray,JSON_UNESCAPED_UNICODE);
        $consulta->save();

        return redirect("/api/resposta/$consulta->id");
    }

    public function resposta($id){
        $result = Sintegra::find($id);

        return json_encode($result,JSON_UNESCAPED_UNICODE);
    }

}
