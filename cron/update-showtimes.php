<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

set_time_limit(0);

//testa se o acesso veio atraves de requisicao web/curl se sim roda a atualizacao...
//senao é pq deve ser teste via phpunit ou alguma chamada direta
if (Env::is_http_req()) {
	update_showtimes();
}

function update_showtimes(){
	// $db = DatabaseFactory::get_provider();
	// 
	// $cinemas = $db->get_cinemas();
	
	$start = microtime(true);
	
	$path = Env::path() . 'cinema/br';
	$cinemas = Helper::get_file_list($path);

	$updated = array();
	
	$erros = array();
	
	$cinemas_aux = $cinemas;
	$cinemas = array();
	$cinemas[] = $cinemas_aux[0];
	$cinemas[] = $cinemas_aux[1];
	$cinemas[] = $cinemas_aux[2];
	$cinemas[] = $cinemas_aux[3];
	
	foreach ($cinemas as $value) {
		//$classname = $value->id;
		$classname = basename($value, '.php');

		try {
			if (class_exists($classname)) {
				$cinema_class = new $classname;
				$cinema = $cinema_class->update();

				if (!empty($cinema)) {
					$updated[] = $cinema;
				}
	
			}			
		} catch (Exception $e) {
			$erros[] = $classname . ' - ' . $e->getMessage();
		}
	}

	if (count($updated) > 0) {
		callback_subscribers($updated);
		
		Sendmail::to_admin(count($updated) . " cinemas atualizados", $updated);	
		
	}
	
	Sendmail::to_admin(count($erros) . " erros atualizando cinemas", $erros);	
	
	$total = Helper::elapsed_time($start);
	
	Log::write("Tempo total atualizando cinemas: $total");	
}

function callback_subscribers($cinemas){
	$cinemas_updated = base64_encode(json_encode($cinemas));
	
	$db = DatabaseFactory::get_provider();

	$subscribers = $db->get_subscribers();
	
	foreach ($subscribers as $subscriber) {
		$url = $subscriber->value->callback;
		
		post_request($url, $cinemas_updated);
	}		
	
}

function post_request($url, $data) {
	/*
		TODO faz essa requisicao para todos os clientes registrados com callback
	*/
	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, array('data'=>$data));

	//execute post
	$result = curl_exec($ch);

	//close connection
	curl_close($ch);		
}

?>