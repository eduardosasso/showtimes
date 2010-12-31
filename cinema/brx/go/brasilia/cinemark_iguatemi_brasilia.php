<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_iguatemi_brasilia extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Iguatemi Brasília";
		$cinema->address = "Lago Norte, Brasília - Brazilian Federal District, 71503-504, Brazil";
		$cinema->state = "Distrito Federal";
		$cinema->state_code = "GO";
		$cinema->city = "Brasilia";
		$cinema->lat = "-15.7203232";
		$cinema->long = "-47.8859679";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=%C3%81guas+Lindas+de+Goi%C3%A1s+GO&amp;tid=895fbba915944751";
	}

}
?>