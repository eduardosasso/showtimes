<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_shopping_d extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Shopping D";
		$cinema->address = "Av. Cruzeiro do Sul, 1100 - Pari, Sao Paulo - São Paulo, 03033-020, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5231418";
		$cinema->long = "-46.6251884";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aruj%C3%A1+SP&amp;tid=f1c1b938448630c8";
	}

}
?>