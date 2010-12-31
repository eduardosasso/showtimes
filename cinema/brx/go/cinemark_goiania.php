<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_goiania extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Goiânia";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "GO";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Abadia+de+Goi%C3%A1s+GO&amp;tid=4838d6e08ff32ddd";
	}

}
?>