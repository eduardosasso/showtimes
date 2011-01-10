<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_colinas extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "44bd153f9dc05fc";
		$cinema->name = "Cinemark Colinas";
		$cinema->address = "Av. São João, 2200 - Jardim Colinas, São José dos Campos - São Paulo, 12242-000, Brazil";
		$cinema->phone = "(0xx)12 3923-2268";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "São José dos Campos";
		$cinema->lat = "-23.2086551";
		$cinema->long = "-45.9087642";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ca%C3%A7apava+SP&tid=44bd153f9dc05fc";
	}

}
?>