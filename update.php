<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//cria ou atualiza cinemas de todo brazil
function update_brazil(){
	$cinemas_brx = Env::path('temp/brasil.json');		
	$cinemas_brx = file_get_contents($cinemas_brx);
	$cinemas_brx = json_decode($cinemas_brx);

	//teste santa catarina
	$cinemas_br[] = $cinemas_brx[19];
	//$cinemas_br = $cinemas_brx;

	//loop em todos os estados e cidades do estado
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

			$cidade_clean = Helper::clean_string($cinema->city);

			$dir = "cinema/br/$uf/" . $cidade_clean . '/';
			$dir = strtolower($dir);
			$template->create($dir, $cinema);				
		}	
	}	

}


?>