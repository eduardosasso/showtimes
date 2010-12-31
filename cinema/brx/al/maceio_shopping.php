<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class maceio_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Maceió Shopping";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "AL";
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