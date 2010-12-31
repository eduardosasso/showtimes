<?php 

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

//Singleton Factory basico para abstrair o banco de dados utilizado pelo resto da app
class DatabaseFactory {
	public static function get_provider() {
		static $db = null;
		
		if ( $db == null )
			$db = new CouchDB();
			
		return $db;
	}
}	
?>