<?php
set_time_limit(0);

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

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
    
	$cinemas_br = Env::path('temp/brasil.json');		
	$cinemas_br = file_get_contents($cinemas_br);
	$cinemas_br = json_decode($cinemas_br);

	//loop em todos os estados e cidades do estado
	$new_cinemas = array();
	$invalid_cinemas = array();
	
	foreach ($cinemas_br as $value) {
		$estado = $value->nome;
		$uf = $value->codigo;
		$cidades = $value->cidades;

		$cinema_finder = new CinemaFinder('br',$uf, $cidades);
		$cinemas = $cinema_finder->get_all_cinemas();

		$template = new CinemaTemplate();

		foreach ($cinemas as $cinema) {
			$base_dir = "cinema/br/";
			//passa o codigo do estado temporariamente para depois alterar e verificar se o cinema é realmente desse local
			$cinema->state_code = $uf;
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