<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_goiania extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4838d6e08ff32ddd";
		$cinema->name = "Cinemark Goiânia";
		$cinema->address = "Av. Jamel Cecílio - Jardim Goiás, Goiânia - GO, 74810-100, Brazil";
		$cinema->phone = "(0xx)62 3515-1819";
		$cinema->state = "Goiás";
		$cinema->state_code = "GO";
		$cinema->city = "Goiânia";
		$cinema->lat = "-16.7071317";
		$cinema->long = "-49.2385574";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Abadia+de+Goi%C3%A1s+GO&tid=4838d6e08ff32ddd";
	}

}
?>