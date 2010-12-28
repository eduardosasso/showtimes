<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

abstract class AbstractCinemaAdapter {
	
	abstract protected function scrape();
	
	abstract protected function get_cinema();
	
	public function print_json(){
		header("Content-type: application/json");
		
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
		
		echo json_encode($cinema);
	}
	
	public function serialize_data(){
		$cinema = $this->scrape();
		return serialize($cinema);
	}
	
	public function hash() {
		$cinema = $this->scrape();

		return md5(json_encode($cinema));
	}
}
?>