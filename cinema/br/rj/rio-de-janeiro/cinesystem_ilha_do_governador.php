<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_ilha_do_governador extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "246aa136a99c32df";
		$cinema->name = "Cinesystem  Ilha do Governador";
		$cinema->address = "Av. Maestro Paulo E Silva, 400 - Jardim Carioca, Rio de Janeiro, 21920-445, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.8014399";
		$cinema->long = "-43.2021633";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&tid=246aa136a99c32df";
	}

}
?>