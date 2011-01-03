<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

abstract class AbstractCinemaAdapter {

	abstract protected function scrape();

	abstract protected function get_cinema();

	private function run(){
		try {
			$cinema = @$this->scrape();

			if (count($cinema->movies) == 0) {
				$cinema->status = 'INVALID';
				throw new Exception('Cinema não tem filmes');	
			} else {
				$cinema->status = 'OK';
			}

			$cinema->hash = md5(json_encode($cinema->movies));

		} catch (Exception $e) {
			$cinema = array('status' => 'INVALID');

			Log::write($e->getMessage(), ' - ');
		}

		$data = $this->register_on_db($cinema);

		return $data;		
	}
	
	public function get_json() {
		return json_encode($this->run());
	}

	//Retorna a URL completa se um cinema foi atualizado. 
	//Quem chama essa funcao vai guardar esse retorno para notificar os usuarios do servico
	public function update(){
		$json = $this->run();
		
		if ($json->updated == 'YES') {
			$name = $json->_id;
			$city = Helper::clean_string($json->city);
			$state = strtolower($json->state_code);

			$url = Env::cinema_url() . $state . '/' . $city . '/' . $name;

			return $url;
		}
	}

	public function print_json(){
		header("Content-type: application/json");

		$data = $this->get_json();

		echo $data;
	}

	private function register_on_db($cinema) {
		//o nome da classe é o id do banco, recupera dinamico
		$classname = get_class($this);		

		$cinema->_id = $classname;		

		$db = DatabaseFactory::get_provider();

		$cinema_db = $db->find($classname);

		$cinema->updated = 'NO';
		
		if ($cinema_db) {
			if ($cinema_db->hash != $cinema->hash) {
				$cinema->_rev = $cinema_db->_rev;

				$db->save($cinema);				

				//atributo utilizado para filtrar cinemas que foram atualizados para notificar clientes de atualizacao uma unica vez.
				$cinema->updated = 'YES';

				Log::write($cinema->name . ' tem novidades');
				/*
				TODO aqui deve chamar o callback com os clientes para notificar atualizacao
				deve armazenar para chamar o callback uma unica vez com todas as atualizacoes
				*/
			}
		} else {			
			$db->save($cinema);
		}		
		return $cinema;		
	}

}	

?>