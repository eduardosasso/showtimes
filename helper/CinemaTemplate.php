<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class CinemaTemplate{
	private $new_cinemas = array();
	private $invalid_cinemas = array();
	
	public function get_new_cinemas() {
		return $this->new_cinemas;
	}
	
	public function get_invalid_cinemas() {
		return $this->invalid_cinemas;
	}
	
	public function create($dir, Cinema $cinema) {
		//monta o path completo para o diretorio 
		$path = Env::path($dir);

		$this->new_template($path, $cinema);

	}
	
	private function new_template($dir, Cinema $cinema) {
		$nome = $cinema->name;
		
		$class = Helper::clean_string($nome, -1, '_');
		
		$file = $class . '.php';
		
		$tid = $cinema->id;

		//se ja tem uma classe para o cinema descarta entao
		//pesquisa classe com mesmo nome recursivo a partir do diretorio do estado...
		//if (!is_file($file)) {
		if (!Helper::recursive_file_exists($file, $dir)) {
			
			$cinema = $this->geo_cinema($cinema);

			$endereco = $cinema->address;
			$telefone = $cinema->phone;
			$url = $cinema->url;
			$lat = $cinema->lat;
			$long = $cinema->long;
			$cidade = $cinema->city;
			$estado = $cinema->state;
			$uf = $cinema->state_code;
			
			//se não achou o cinema cria a estrutura de dir correta para ele cinema/uf/cidade 
			$path = $dir . Helper::clean_string($cinema->city);
			$this->create_dir($path);
			
			$tpl =  Env::path('helper/CinemaClass.tpl');
			if (!is_file($tpl)) {
				Log::write("Não achou $tpl");
				exit(1);
			} 
			
			//a classe do cinema fica sempre em cinema/uf/cidade/file.php
			$file = $path . '/' . $file;
			$handle = fopen($file, 'w');
			
			if ($handle == false) {
				Log::write("Erro criando $file");
				exit(1);
			}
			
			$cinema_class = file_get_contents($tpl);
			
			$content = str_replace("%class", $class, $cinema_class);
			$content = str_replace("%nome", $nome, $content);
			$content = str_replace("%id", $tid, $content);
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
			
			//guarda todos os novos cinemas criados para depois notificar via email para o admin controlar...
			//se não achou a cidade do cinema via geolocation vai colocar em um lugar errado, entao tem q notificar...
			$cinema_path = str_replace(Env::path(), "", $file);
			if (empty($cidade)) {
				$this->invalid_cinemas[] = $cinema_path;
			} else{
				$this->new_cinemas[] = $cinema_path;
			}
			
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
	
	private function geo_cinema($cinema){
		$endereco =  $cinema->address;
		$geocode = new Geocode($endereco);
		
		$cinema->address = $geocode->address();
		$cinema->lat = $geocode->lat();
		$cinema->long = $geocode->long();
		$cinema->city = $geocode->city();

		$estado = $geocode->state();
		
		if ($estado) {
			$cinema->state = $estado['name'];
			$cinema->state_code = $estado['short'];
		} else {
			$cinema->state = '';
			$cinema->state_code = '';
		}
		
		return $cinema;
	}

}

?>