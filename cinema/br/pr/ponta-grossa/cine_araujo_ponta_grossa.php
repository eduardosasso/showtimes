<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_ponta_grossa extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "ad4dd623f3eca7ce";
		$cinema->name = "Cine Araújo Ponta Grossa";
		$cinema->address = "R. Ermelino de Leão, 105 - Centro, Ponta Grossa - Paraná, 84035-000, Brazil";
		$cinema->phone = "(0xx)42 3222-9292";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Ponta Grossa";
		$cinema->lat = "-25.0946324";
		$cinema->long = "-50.1531323";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Carambe%C3%AD+PR&tid=ad4dd623f3eca7ce";
	}

}
?>