<?php 
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class CouchDB implements DatabaseInterface { 
	
	private $db;
	
	function __construct() {
		$url = Env::get_couchdb_url();
	
		$database = "showtimes";
		
		$this->db = new couchClient($url,$database);
	}
	
	public function save($document) {
		$document->_id = Helper::escape_special_char($document->_id);
		
		/*
			TODO Tem q tratar o retorno e excecoes
		*/
		$response = $this->db->storeDoc($document);
		
		return $response;
	}
	
	//Remove documentos poara teste
	public function clean_database() {
		$all_or_nothing = true;
		
		$placemarks = $this->db->getView('placemark','placemarks');
		
		foreach ($placemarks->rows as $row ) {
			$this->db->deleteDoc($row->value);
		}
	}
	
	public function get_subscribers(){
		$subscribers = $this->db->getView('subscribers','subscribers');
		return $subscribers->rows;
	}
	
	public function get_cinemas(){
		$cinemas = $this->db->getView('cinemas','cinemas');
		return $cinemas->rows;
	}
	
	public function find($id) {
		try {
			$result = $this->db->getDoc($id);
			$result->_id = Helper::unescape_special_char($result->_id);
			
		} catch (couchException $e) {
			/*
				TODO tratar melhor o erro ver exatamente o que eh.
				como solucao temp retorno null indicando q usuario nao foi encontrado
			*/
			$result = null;
		}				
		return $result;		
	}

}
?>