<?php

class Env {
	const LOCAL = 'showtimes.dev';
	const PROD = '173.255.199.136';
	const DEV = 'showtimes.refilmagem.com.br:9999';	
	const URL_PATH = '/cinema/';	
	
	public static function is() {
		if (isset($_SERVER["SERVER_NAME"])) {
			$domain = $_SERVER["SERVER_NAME"];
		} else {
			//se ta testando com phpunit não  vai ter SERVER_NAME entao assume que é local			
			$domain = Env::LOCAL;			
		}

		switch ($domain) {
			case Env::LOCAL:
				return Env::LOCAL;
				break;
			case Env::PROD:
				return Env::PROD;
				break;
			default:
				return Env::DEV;
				break;
		}		
		
	}
	
	public static function is_http_req() {
		return isset($_SERVER["SERVER_NAME"]);
	}
	
	public static function url(){
		return "http://" . Env::is();
	}
	
	public static function url_path(){
		return Env::URL_PATH;
	}
	
	public static function cinema_url() {
		return Env::url() . Env::url_path();
	}
	
	public static function path($dir=''){
		if ($dir && Helper::starts_with($dir,'/')) {
			$dir = substr($dir, 1);
		}
		
		$path = '/Users/eduardosasso/Dropbox/showtimes/';
		if ($_ENV['USER'] != 'eduardosasso') {
			//teste meio tosco so pra identificar que esta no ambiente de producao
			$path = '/www/showtimes/';
		} 
		
		return $path . $dir;		
	}
	
	public static function smtp(){
		$smtp = new stdClass();
		$smtp->host = "ssl://smtp.gmail.com";
		$smtp->port = "465";
		$smtp->username = "eduardo.sasso@gmail.com";
		$smtp->password = "pasek1078";
		
		return $smtp;	
	}
	
	public static function get_couchdb_url() {
		$url = 'http://localhost:5984/';
		
		// if (Env::get_env() == Env::LOCAL) {
		// 	//via ssh tunnel base quente.
		// 	$url = "http://localhost:5985/";
		// }
		
		return $url;
	}	
	
}	 

?>