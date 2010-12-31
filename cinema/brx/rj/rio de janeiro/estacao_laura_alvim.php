<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class estacao_laura_alvim extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Estação Laura Alvim";
		$cinema->address = "Av. Vieira Souto, 176 - Ipanema, Rio de Janeiro, 22420-000, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.986641";
		$cinema->long = "-43.1993289";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Maric%C3%A1+RJ&amp;tid=70f4d99cb78276b7";
	}

}
?>