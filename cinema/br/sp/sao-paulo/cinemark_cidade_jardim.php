<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_cidade_jardim extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "fbf54747cff1aaa3";
		$cinema->name = "Cinemark Cidade Jardim";
		$cinema->address = "Av. Magalhães de Castro - Butantã, Sao Paulo - São Paulo, 05502-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5607431";
		$cinema->long = "-46.7088477";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ara%C3%A7ariguama+SP&tid=fbf54747cff1aaa3";
	}

}
?>