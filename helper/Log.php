<?php

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class Log {
	public static function write($message) {
		/*
			TODO Aqui configurar para mandar por email os erros
		*/
		if (is_object($message)) {
			error_log('<pre>'.print_r($message, 1).'</pre>');
		} else {
			error_log($message);
		}

	}

}		

?>