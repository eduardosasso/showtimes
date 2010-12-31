<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class terraco_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Terraço Shopping";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "GO";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=%C3%81guas+Lindas+de+Goi%C3%A1s+GO&amp;tid=dc04db7f68f10da3";
	}

}
?>