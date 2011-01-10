<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_tam extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "44578c7b9debe5ad";
		$cinema->name = "Cine TAM";
		$cinema->address = "Av. Roque Petroni Júnior, 1069 - Itaim Bibi, Sao Paulo - São Paulo, 04707-000, Brazil";
		$cinema->phone = "(0xx)11 5189-4656";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "São Paulo";
		$cinema->lat = "-23.6217935";
		$cinema->long = "-46.6978228";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cotia+SP&tid=44578c7b9debe5ad";
	}

}
?>