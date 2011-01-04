<?php
class Helper {

	public static function starts_with($haystack, $needle, $case=false) {
		if($case){return (strcmp(substr($haystack, 0, strlen($needle)),$needle)===0);}
		return (strcasecmp(substr($haystack, 0, strlen($needle)),$needle)===0);
	}
	
	public static function recursive_file_exists($filename, $directory) {
		try {
			/*** loop through the files in directory ***/
			foreach(new recursiveIteratorIterator( new recursiveDirectoryIterator($directory)) as $file){
				/*** if the file is found ***/
				if( $directory.'/'.$filename == $file )	{
					return true;
				}
			}
			/*** if the file is not found ***/
			return false;
		}	catch(Exception $e)	{
			/*** if the directory does not exist or the directory
			or a sub directory does not have sufficent
			permissions return false ***/
			return false;
		}
	}

	public static function nicetime($date) {
		if(empty($date)) {
			return "No date provided";
		}

		$periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
		$lengths         = array("60","60","24","7","4.35","12","10");

		$now             = time();
		$unix_date         = $date;

		// check validity of date
		if(empty($unix_date)) {    
			return "Bad date";
		}

		// is it future date or past date
		if($now > $unix_date) {    
			$difference     = $now - $unix_date;
			$tense         = "ago";

		} else {
			$difference     = $unix_date - $now;
			$tense         = "from now";
		}

		for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
			$difference /= $lengths[$j];
		}

		$difference = round($difference);

		if($difference != 1) {
			$periods[$j].= "s";
		}

		return "$difference $periods[$j] {$tense}";
	}
	

	public static function clean_string($string, $length = -1, $separator = '-') {
		// transliterate
		$string = Helper::transliterate($string);

		// lowercase
		$string = strtolower($string);

		// replace non alphanumeric and non underscore charachters by separator
		$string = preg_replace('/[^a-z0-9]/i', $separator, $string);

		// replace multiple occurences of separator by one instance
		$string = preg_replace('/'. preg_quote($separator) .'['. preg_quote($separator) .']*/', $separator, $string);

		// cut off to maximum length
		if ($length > -1 && strlen($string) > $length) {
			$string = substr($string, 0, $length);
		}

		// remove separator from start and end of string
		$string = preg_replace('/'. preg_quote($separator) .'$/', '', $string);
		$string = preg_replace('/^'. preg_quote($separator) .'/', '', $string);

		return $string;
	}

	public static function get_url_param($url, $param) {
		$parts = parse_url($url);

		if (isset($parts['query'])) {
			$query = $parts['query'];

			parse_str($query, $params);

			if (isset($params[$param])) {
				return $params[$param];
			}

		}
	}

	public static function format_address($endereco) {
		$pattern = '|\(0xx\)\(?\d{2}\)? ?\d{4}\-?\d{4}|';

		preg_match($pattern, $endereco, $matches);

		$endereco = preg_replace($pattern, '', $endereco);

		$telefone = '';
		if (count($matches) == 1) {
			$telefone = $matches[0];
		}

		$endereco_ =  new stdClass();
		$endereco_->address = $endereco;
		$endereco_->phone = $telefone;

		return $endereco_;

	}

	public static function http_req($url){
		$curl_handle=curl_init();

		curl_setopt($curl_handle,CURLOPT_URL,$url);
		curl_setopt($curl_handle, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; U; FreeBSDi386; en-US; rv:1.2a) Gecko/20021021");
		curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7'));
		curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);  
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);
		return $buffer;		
	}

	public static function transliterate($string) {
		static $i18n_loaded = false;
		static $translations = array();

		if (!$i18n_loaded) {
			$path = Env::path('helper/i18n-ascii.txt');
			if (is_file($path)) {
				$translations = parse_ini_file($path);
			}
			$i18n_loaded = true;
		}

		return strtr($string, $translations);
	}
	
	public static function print_json($data){
		header("Content-type: application/json");

		echo json_encode($data);		
	}

	public static function escape_special_char($id) {
		//underscore é reservado para id, se vier simula um scape para gravar...
		if (Helper::starts_with($id, '_')) {
			return '/' . $id;
		} else {
			return $id;
		}
	}

	public static function unescape_special_char($id) {
		return str_replace('/_' , '_', $id);
	}

}


?>