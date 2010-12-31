<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class roxy extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Roxy";
		$cinema->address = "Av. Ns. de Copacabana, 945 - Copacabana, Rio de Janeiro, 22060-001, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9761209";
		$cinema->long = "-43.1900893";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Maric%C3%A1+RJ&amp;tid=ab1fdaf48446217";
	}

}
?>