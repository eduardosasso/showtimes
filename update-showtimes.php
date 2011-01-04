<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//testa se o acesso veio atraves de requisicao web/curl se sim roda a atualizacao...
//senao é pq deve ser teste via phpunit ou alguma chamada direta
if (Env::is_http_req()) {
	update_showtimes();
}

function update_showtimes(){
	$db = DatabaseFactory::get_provider();

	$cinemas = $db->get_cinemas();

	$updated = array();
	
	foreach ($cinemas as $key => $value) {
		$classname = $value->id;
		
		$cinema = new $classname;
		
		$url = $cinema->update();
		
		if (!empty($url)) {
			$updated[] = $url;
		}
	}

	if (count($updated) > 0) {
		callback_subscribers($updated);
	}
	
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