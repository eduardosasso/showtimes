<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_guarulhos extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "7ad8893dde095c3c";
		$cinema->name = "Cinemark Guarulhos";
		$cinema->address = "Rod. Pres. Dutra - Guarulhos - São Paulo, Brazil";
		$cinema->phone = "(0xx)11 6425-0665";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Guarulhos";
		$cinema->lat = "-23.4533734";
		$cinema->long = "-46.4694917";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&tid=7ad8893dde095c3c";
	}

}
?>