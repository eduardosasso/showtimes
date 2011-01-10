<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_condor_paranagua extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "e8fb0fcff1d000be";
		$cinema->name = "Cinesystem Condor - Paranaguá";
		$cinema->address = "R. Manoel Pereira, 1615 - 29 de Julho, Paranaguá - Paraná, 83206-200, Brazil";
		$cinema->phone = "(0xx)41 3420-8888";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Paranaguá";
		$cinema->lat = "-25.5195059";
		$cinema->long = "-48.5199218";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Antonina+PR&tid=e8fb0fcff1d000be";
	}

}
?>