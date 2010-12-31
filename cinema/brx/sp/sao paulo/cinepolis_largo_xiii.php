<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinepolis_largo_xiii extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinépolis Largo XIII";
		$cinema->address = "R. Amador Bueno, 219 - Santo Amaro, Sao Paulo - São Paulo, 04752-005, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.6523595";
		$cinema->long = "-46.709359";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cotia+SP&amp;tid=34d0d0e5e5490be6";
	}

}
?>