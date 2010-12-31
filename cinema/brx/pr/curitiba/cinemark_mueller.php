<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_mueller extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Mueller";
		$cinema->address = "Av. Cândido de Abreu, 127 - Centro Cívico, Curitiba - Paraná, 80530-000, Brazil";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Curitiba";
		$cinema->lat = "-25.4230611";
		$cinema->long = "-49.2700045";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Almirante+Tamandar%C3%A9+PR&amp;tid=4ee7d71cb53d59b5";
	}

}
?>