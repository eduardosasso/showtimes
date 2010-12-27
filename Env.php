<?php

class Env {
	const LOCAL = 'showtimes.dev';
	const PROD = 'showtimes.refilmagem.com.br';
	const DEV = 'showtimes.refilmagem.com.br:9999';	
	
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
	
	public static function path($dir=''){
		if ($dir && Helper::starts_with($dir,'/')) {
			$dir = substr($dir, 1);
		}
		
		$path = '/Users/eduardosasso/Dropbox/showtimes/';
		if (Env::is() == Env::PROD) {
			$path = '/www/showtimes.refilmagem.com.br/html/';
		} 
		
		return $path . $dir;	
		
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