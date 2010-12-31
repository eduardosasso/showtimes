<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_riomar extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark RioMar";
		$cinema->address = "R. Delmiro Gouveia, 268 - Atalaia, Aracaju - Sergipe, 49035-810, Brazil";
		$cinema->state = "Sergipe";
		$cinema->state_code = "SE";
		$cinema->city = "Aracaju";
		$cinema->lat = "-10.9524866";
		$cinema->long = "-37.0451589";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aracaju+SE&amp;tid=ed5edba63dc066a6";
	}

}
?>