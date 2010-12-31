<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_metro_tatuape extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Metrô Tatuapé";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "SP";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&amp;tid=8e353c36a0c49093";
	}

}
?>