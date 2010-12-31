<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class CinemaTemplate{

	public function create($dir, Cinema $cinema) {
		//monta o path completo para o diretorio 
		$path = Env::path($dir);

		$this->create_dir($path);
		
		$this->new_template($path, $cinema);

	}
	
	private function new_template($dir, Cinema $cinema) {
		$nome = $cinema->name;
		
		$class = Helper::clean_string($nome, -1, '_');

		$endereco = $cinema->address;
		$telefone = $cinema->phone;
		$url = $cinema->url;
		$id = $cinema->id;
		$lat = $cinema->lat;
		$long = $cinema->long;
		$cidade = $cinema->city;
		$estado = $cinema->state;
		$uf = $cinema->state_code;
		
		$file = $class . '.php';
		
		$file = $dir . $file;

		//se ja tem uma classe para o cinema descarta entao
		if (!is_file($file)) {
			
			$tpl =  Env::path('helper/CinemaClass.tpl');
			if (!is_file($tpl)) {
				Log::write("Não achou $tpl");
				exit(1);
			} 
			
			$handle = fopen($file, 'w');
			
			if ($handle == false) {
				Log::write("Erro criando $file");
				exit(1);
			}
			
			$cinema_class = file_get_contents($tpl);
			
			$content = str_replace("%class", $class, $cinema_class);
			$content = str_replace("%nome", $nome, $content);
			$content = str_replace("%id", $id, $content);
			$content = str_replace("%endereco", $endereco, $content);
			$content = str_replace("%telefone", $telefone, $content);
			$content = str_replace("%cidade", $cidade, $content);
			$content = str_replace("%estado", $estado, $content);
			$content = str_replace("%uf", $uf, $content);
			$content = str_replace("%lat", $lat, $content);
			$content = str_replace("%long", $long, $content);
			$content = str_replace("%url", $url, $content);
			
			fwrite($handle, $content);
			fclose($handle);

		} 

	}

	private function create_dir($dir) {
		if (!file_exists($dir)) {
			try {
				mkdir($dir,0755,true);
			} catch (Exception $e) {
				//se der erro na criacao do diretorio para tudo...
				Log::write($e->getMessage() . ' - ' . $dir);
				exit(1);
			}
		}		
	}	

}

?>