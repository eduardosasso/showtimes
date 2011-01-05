<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

set_time_limit(0);

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//se o acesso é via web/curl pressupoe q é pelo cron entao roda...
if (Env::is_http_req()) {
	find_cinemas_brazil();
}


//cria ou atualiza cinemas de todo brazil
function find_cinemas_brazil(){
	$start = microtime(true);
    
	$cinemas_brx = Env::path('temp/brasil.json');		
	$cinemas_brx = file_get_contents($cinemas_brx);
	$cinemas_brx = json_decode($cinemas_brx);

	//teste santa catarina
	//$cinemas_br[] = $cinemas_brx[19];
	$cinemas_br = $cinemas_brx;

	//loop em todos os estados e cidades do estado
	$new_cinemas = array();
	$invalid_cinemas = array();
	
	foreach ($cinemas_br as $value) {
		$estado = $value->nome;
		$uf = $value->codigo;
		$cidades = $value->cidades;

		//so uma cidade para teste para ficar mais rapido
		//$cidades = array('Florianópolis');

		$cinema_finder = new CinemaFinder('br',$uf, $cidades);
		$cinemas = $cinema_finder->get_all_cinemas();

		$template = new CinemaTemplate();

		foreach ($cinemas as $cinema) {
			$dir = "cinema/br/$uf/";
			$base_dir = strtolower($dir);
			$template->create($base_dir, $cinema);				
		}
		
		$new_cinemas = array_merge($new_cinemas,$template->get_new_cinemas());	
		$invalid_cinemas = array_merge($invalid_cinemas,$template->get_invalid_cinemas());	
	}
	
	$total = Helper::elapsed_time($start);
	
	Log::write("Tempo total procurando cinemas: $total");
			
	Sendmail::to_admin(count($new_cinemas) . " cinemas novos", $new_cinemas);	
	
	Sendmail::to_admin(count($invalid_cinemas) . " cinemas sem cidade", $invalid_cinemas);	
	
}


?>