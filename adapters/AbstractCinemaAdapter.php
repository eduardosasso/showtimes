<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

abstract class AbstractCinemaAdapter {

	abstract protected function scrape();

	abstract protected function get_cinema();
	
	//Retorna a URL completa se um cinema foi atualizado. 
	//Quem chama essa funcao vai guardar esse retorno para notificar os usuarios do servico
	public function update(){
		$json = $this->run();
		
		if ($json->updated == 'YES') {
			$name = $json->_id;
			$city = Helper::clean_string($json->city);
			$state = strtolower($json->state_code);
			
			$url = Env::cinema_url() . $state . '/' . $city . '/' . $name;
			
			//retorna a url para acesso e o status assim o cliente pode testar o status antes de fazer uma requisicao.
			$cinema = new stdClass();
			$cinema->url = $url;
			$cinema->status = $json->status;

			return $cinema;
		}
	}

	private function run(){
		try {
			$cinema = @$this->scrape();

			if (count($cinema->movies) == 0) {
				throw new Exception($cinema->name . ' não tem filmes');	
			} elseif (empty($cinema->city)) {
				throw new Exception($cinema->name . ' com endereço inválido ainda.');					
			} else {
				$cinema->status = 'OK';
				
				//ordena os filmes por nome para garantir fidelidade na comparacao com o hash...
				$movies_sorted = $cinema->movies;
				usort($movies_sorted,'Helper::sort_by_name');
				$cinema->hash = md5(json_encode($movies_sorted));
			}
		} catch (Exception $e) {
			$cinema->status = 'INVALID';
			$cinema->hash = md5(time());
			
			Log::write($e->getMessage());
		}

		$data = $this->register_on_db($cinema);

		return $data;		
	}
	
	public function get_json() {
		return json_encode($this->run());
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

		if ($cinema_db) {
			if ($cinema_db->hash != $cinema->hash) {
				$cinema->_rev = $cinema_db->_rev;

				//utilizado mais para ter uma nocao olhando direto no banco...
				$cinema->last_update = date('d/m/y H:i:s');

				$db->save($cinema);

				//atributo utilizado para filtrar cinemas que foram atualizados para notificar clientes de atualizacao uma unica vez.
				//seta o valor temporariamente, não guarda no db, so para validacao
				$cinema->updated = 'YES';

				//Log::write($cinema->name . ' tem novidades');
			}			
		} else {			
			$cinema->last_update = date('d/m/y H:i:s');
			$db->save($cinema);			
			$cinema->updated = 'YES';
		}

		if (!isset($cinema->updated)) {
			//controle so de validacao 
			$cinema->updated = 'NO';
		}

		return $cinema;		
	}

}	

?>