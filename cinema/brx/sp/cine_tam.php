<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_tam extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine TAM";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "SP";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cotia+SP&amp;tid=44578c7b9debe5ad";
	}

}
?>