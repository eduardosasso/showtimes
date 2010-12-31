<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_barigui extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Barigui";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "PR";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Almirante+Tamandar%C3%A9+PR&amp;tid=1049e1132df20f72";
	}

}
?>