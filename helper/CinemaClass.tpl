<?php
	include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';
	
	class %class extends GoogleMoviesAdapter {
		private $nome = "%nome";
		private $id = "%id";
		private $endereco = "%endereco";
		private $cidade = "%cidade";
		private $estado = "%estado";
		private $uf = "%uf";
		private $lat = "%lat";
		private $long = "%long";
		
		public function get_url() {
			return "%url";
		}
		
	}
?>