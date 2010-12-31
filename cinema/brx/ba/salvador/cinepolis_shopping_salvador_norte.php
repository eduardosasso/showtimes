<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinepolis_shopping_salvador_norte extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinépolis Shopping Salvador Norte";
		$cinema->address = "R. da Rodovia A, 526 - Boa Vista de São Caetano, Salvador - Bahia, 40385-000, Brazil";
		$cinema->state = "Bahia";
		$cinema->state_code = "BA";
		$cinema->city = "Salvador";
		$cinema->lat = "-12.9235939";
		$cinema->long = "-38.4739388";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cama%C3%A7ari+BA&amp;tid=323ed3f33d94a50d";
	}

}
?>