<?php
class Helper {

	public static function starts_with($haystack, $needle, $case=false) {
		if($case){return (strcmp(substr($haystack, 0, strlen($needle)),$needle)===0);}
		return (strcasecmp(substr($haystack, 0, strlen($needle)),$needle)===0);
	}

	function clean_string($string, $length = -1, $separator = '-') {
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

}


?>