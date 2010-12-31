<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class via_parque extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Via Parque";
		$cinema->address = "Av. Ayrton Senna, 3000 - Gardênia Azul, Rio de Janeiro, 22775-001, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9559184";
		$cinema->long = "-43.3557541";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&amp;tid=c366946c2ef185c6";
	}

}
?>