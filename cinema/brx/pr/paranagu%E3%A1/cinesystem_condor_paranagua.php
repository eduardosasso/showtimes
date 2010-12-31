<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_condor_paranagua extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinesystem Condor - Paranaguá";
		$cinema->address = "R. Manoel Pereira, 1615 - 29 de Julho, Paranaguá - Paraná, 83206-200, Brazil";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Paranaguá";
		$cinema->lat = "-25.5195059";
		$cinema->long = "-48.5199218";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>