<?php
	include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';
	
	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);
	ini_set('display_startup_errors', TRUE);
	
	$domain = 'http://' . $_SERVER['HTTP_HOST'];	
	$root_path = realpath($_SERVER["DOCUMENT_ROOT"]);
	
	//recebe do htaccess mod_rewrite para saber quem chamou.
	$query_path = $_REQUEST['id'];
	
	if (is_dir("$root_path/$query_path")) {
		$dir = "$root_path/$query_path";
		
		$dir_list = array();
		foreach (scandir($dir) as $key => $value) {
			//desconsidera . e .. como diretorios
			if (preg_match("/^[\w]/", $value)) {
				//troca a extensao do arquivo se existir para .json
				$name = preg_replace('/\..+$/', '.json', $value);
				$url = "$domain/$query_path$name";

				$dir_list[] = array("name" => $name, "url" => $url);
			}
		}
		
		Helper::print_json($dir_list);
		
	} else {
		
		$classname = basename($query_path, '.json');
		
		//procura a classe no json se encontrar retorna ela... bem mais rapido que IO
		$db = DatabaseFactory::get_provider();
		$data = $db->find($classname);
		
		if ($data) {
			Helper::print_json($data);			
			return;			
		}
		
		$object = new $classname;
		$object->print_json();
	}
			
?>
