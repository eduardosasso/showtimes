<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class terraco_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Terraço Shopping";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "DF";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bras%C3%ADlia+DF&amp;tid=dc04db7f68f10da3";
	}

}
?>