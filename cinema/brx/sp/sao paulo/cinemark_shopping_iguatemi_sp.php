<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_shopping_iguatemi_sp extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Shopping Iguatemi SP";
		$cinema->address = "Av. Brg. Faria Lima, 2232 - Pinheiros, Sao Paulo - São Paulo, 01451-000, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5756678";
		$cinema->long = "-46.6879563";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Jandira+SP&amp;tid=f3e5ba6aca61d544";
	}

}
?>