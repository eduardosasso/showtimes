<?php
	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);
	ini_set('display_startup_errors', TRUE);
	
	// $controller = new ShowtimesController('br','porto-alegre');
	// 	$showtimes = $controller->getShowtimes();
	
	// $xml = simplexml_load_file('superfeedr.xml');
	// 
	// $showtimes = array();
	// foreach ($xml->entry as $key => $value) {
	// 	$showtimes[] = unserialize(base64_decode($value->summary));
	// }
	// 
	// echo '<pre>';
	// print_r($showtimes);
	// echo '</pre>';	

	$domain = 'http://' . $_SERVER['HTTP_HOST'];	
	$root_path = realpath($_SERVER["DOCUMENT_ROOT"]);
	
	//recebe do htaccess mod_rewrite para saber quem chamou.
	$query_path = $_REQUEST['id'];
	
	if (is_dir("$root_path/$query_path")) {
		$dir = "$root_path/$query_path";
		
		$dir_list = array();
		foreach (scandir($dir) as $key => $value) {
			if (preg_match("/^[\w]/", $value)) {
				$name = preg_replace('/\..+$/', '.json', $value);
				$url = "$domain/$query_path$name";

				 $dir_list[] = array("name" => $name, "url" => $url);
			}
		}
		print_json($dir_list);
	} else {
		$classname = basename($query_path, '.json');
		$object = new $classname;
		$object->print_json();
	}
	
	
	function print_json($data){
		header("Content-type: application/json");

		echo json_encode($data);
	}
	
	
	function __autoload($class_name) {
		$folder = classFolder($class_name);

		if($folder)
			require_once($folder.$class_name.".php");
	}

	function classFolder($className, $sub = "/") {
		$class_dir = getcwd();

		$dir = dir($class_dir.$sub);

		if(file_exists($class_dir.$sub.$className.".php"))
			return $class_dir.$sub;

		while(false !== ($folder = $dir->read())) {
			if($folder != "." && $folder != "..") {
				if(is_dir($class_dir.$sub.$folder)) {
					$subFolder = classFolder($className, $sub.$folder."/");

					if($subFolder)
						return $subFolder;
				}
			}
		}
		$dir->close();
		return false;
	}
			
?>