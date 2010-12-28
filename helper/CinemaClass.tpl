<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class %class extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "%id";
		$cinema->name = "%nome";
		$cinema->address = "%endereco";
		$cinema->state = "%estado";
		$cinema->state_code = "%uf";
		$cinema->city = "%cidade";
		$cinema->lat = "%lat";
		$cinema->long = "%long";

		return $cinema;			
	}

	public function get_url() {
		return "%url";
	}

}
?>