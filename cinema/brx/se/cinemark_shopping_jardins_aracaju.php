<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_shopping_jardins_aracaju extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Shopping Jardins Aracajú";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "SE";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aracaju+SE&amp;tid=470b626d068b5944";
	}

}
?>