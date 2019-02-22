<?php

  if(!defined('ABSPATH')){
		exit;
  }  
  /* Inclui o OpenGraph */
  require_once(dirname(__FILE__).'/opengraph/OpenGraph.php');

if (!function_exists('gerarIdentificadorLink')) {	
	function gerarIdentificadorLink($senha = 0, $tamanho = 20, $maiusculas = true, $numeros = true, $simbolos = false){
		// Caracteres de cada tipo
		$lmin = 'abcdefghijklmnopqrstuvwxyz';
		$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$num = '1234567890';
		$simb = '!@#$%*-';
		// Variáveis internas
		$retorno = '';
		$caracteres = '';
		// Agrupamos todos os caracteres que poderão ser utilizados
		$caracteres .= $lmin;
		if ($maiusculas) $caracteres .= $lmai;
		if ($numeros) $caracteres .= $num;
		if ($simbolos) $caracteres .= $simb;
		// Calculamos o total de caracteres possíveis
		$len = strlen($caracteres);
		for ($n = 1; $n <= $tamanho; $n++) {
		// Criamos um número aleatório de 1 até $len para pegar um dos caracteres
		$rand = mt_rand(1, $len);
		// Concatenamos um dos caracteres na variável $retorno
		$retorno .= $caracteres[$rand-1];
		}
		return $retorno;
	}
}

/* Obtém os dados SEO de uma URL */
if (!function_exists('obterOpenGraph')) {
    function obterOpenGraph($url){	
		$graph = OpenGraph::fetch($url);
		//var_dump($graph->keys());
		//var_dump($graph->schema);
		$retorno = '';
		foreach ($graph as $key => $value) {
			$retorno .= "$key => $value";
		}	
        return $retorno;
    }			
}

/* Obtém a imagem SEO de uma URL */

  add_action('wp_ajax_obterImagemOpenGraph','obterImagemOpenGraph');	
  add_action('wp_ajax_nopriv_obterImagemOpenGraph','obterImagemOpenGraph');	
  if (!function_exists('obterImagemOpenGraph')) {	
    function obterImagemOpenGraph(){	
	
	    $urlParam = $_POST['URL'];	
		$graph = OpenGraph::fetch($urlParam);
		$retorno = '';
		foreach ($graph as $key => $value) {
			if ($key == 'image') {
			  $retorno .= "$value";
			}
		}	
        echo $retorno;		
    }
  }	
    add_action('wp_ajax_obterDescricaoOpenGraph','obterDescricaoOpenGraph');	
	add_action('wp_ajax_nopriv_obterDescricaoOpenGraph','obterDescricaoOpenGraph');	
    if (!function_exists('obterDescricaoOpenGraph')) {	
		function obterDescricaoOpenGraph(){	
		
			$urlParam = $_POST['URL'];	
			$graph = OpenGraph::fetch($urlParam);
			$retorno = '';
			foreach ($graph as $key => $value) {
				if ($key == 'description') {
				  $retorno .= "$value";
				}
			}	
			echo $retorno;		
		}					
	}

    add_action('wp_ajax_obterNewsOpenGraph','obterNewsOpenGraph');	
	add_action('wp_ajax_nopriv_obterNewsOpenGraph','obterNewsOpenGraph');	
    if (!function_exists('obterNewsOpenGraph')) {	
		function obterNewsOpenGraph(){	
		
			$urlParam = $_POST['URL'];	
			$graph = OpenGraph::fetch($urlParam);
			$imagem = '';
			$descricao = '';
			foreach ($graph as $key => $value) {
				if ($key == 'description') {
				  $descricao .= "$value";
				}
				if ($key == 'image') {
				  $imagem .= "$value";
				}
			}	
			$retorno = '{"image":"'.$imagem.'","description":"'.$descricao.'" }';		
			echo $retorno;		
		}
    }
	
/*}*/

/* Obtém um dado SEO de uma URL */
if (!function_exists('obterDadoOpenGraph')) {
    function obterDadoOpenGraph($url,$dado){	
		$graph = OpenGraph::fetch($url);
		$retorno = '';
		foreach ($graph as $key => $value) {
			if ($key == $dado) {
			  $retorno .= "$value";
			}
		}	
        return $retorno;
    }			
}

?>