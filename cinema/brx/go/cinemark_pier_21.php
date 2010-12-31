<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_pier_21 extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Pier 21";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "GO";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=%C3%81guas+Lindas+de+Goi%C3%A1s+GO&amp;tid=2bb9a5da2eaeaf9f";
	}

}
?>