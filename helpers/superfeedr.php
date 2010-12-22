<?php
// Callback do superfeedr, recebe um feed com os itens alterados

$challenge = $_GET["hub_challenge"];

$raw = file_get_contents('php://input');

if (!empty($raw)) {
	$to = "eduardo.sasso@gmail.com";
	$subject = "Superfeedr Callback";
	$showtimes = unserialize($raw);
	
	$message = "$raw";
	$from = "admin@refilmagem.com.br";
	$headers = "From: $from";
	mail($to,$subject,$message,$headers);
	
	// error_log("tem conteudo", 0);
	// error_log($showtimes, 0);
}

echo $challenge;

function unserialize_cinema($content){
	$showtimes = unserialize($content);
	echo $showtimes;
	
}

?>