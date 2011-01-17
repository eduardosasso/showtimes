<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

set_time_limit(0);

//testa se o acesso veio atraves de requisicao web/curl se sim roda a atualizacao...
//senao é pq deve ser teste via phpunit ou alguma chamada direta
if (Env::is_http_req()) {
	update_showtimes();
}

function update_showtimes(){
	$start = microtime(true);
	
	$path = Env::path() . 'cinema/br';
	
	$cinemas = Helper::get_file_list($path);
	
	$updated = array();
	$invalid = array();
	
	$erros = array();

	foreach ($cinemas as $value) {
		$classname = basename($value, '.php');

		try {
			if (class_exists($classname)) {
				 $cinema_class = new $classname;
				 $cinema = $cinema_class->update();

				if (!empty($cinema)) {
					$updated[] = $cinema;
					
					if ($cinema->status == 'INVALID') {
						$invalid[] = $cinema;
					}
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
	
	Sendmail::to_admin(count($invalid) . " cinemas invalidos", $invalid);
	
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
	
	//se a url vier com porta quebra ela para a chamada no curl
	$url_parts = parse_url($url);	
	if (isset($url_parts['port'])) {
		$port = $url_parts['port'];
		
		$urlx = str_replace(":$port", "", $url);
				
		curl_setopt($ch,CURLOPT_URL,$urlx);
		curl_setopt($ch,CURLOPT_PORT,$port);

	} else {
		curl_setopt($ch,CURLOPT_URL,$url);
	}

	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, array('data'=>$data));

	//execute post
	$result = curl_exec($ch);

	//close connection
	curl_close($ch);		
}

?>