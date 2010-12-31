<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class iguacu_top extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Iguaçú Top";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "RJ";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&amp;tid=68fec70e3775bde2";
	}

}
?>