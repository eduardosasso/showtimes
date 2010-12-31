<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class g7_apucarana extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "G7 Apucarana";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "PR";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>