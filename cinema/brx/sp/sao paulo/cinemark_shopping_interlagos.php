<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_shopping_interlagos extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Shopping Interlagos";
		$cinema->address = "Av. Interlagos, 2255 - Campo Grande, Sao Paulo - São Paulo, 04661-100, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.6746885";
		$cinema->long = "-46.6783432";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cubat%C3%A3o+SP&amp;tid=7627da891aa307cf";
	}

}
?>