<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class gnc_blumenau extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "GNC Blumenau";
		$cinema->address = "R. Sete de Setembro, 1213 - Centro, Blumenau - Santa Catarina, 89010-202, Brazil";
		$cinema->state = "Santa Catarina";
		$cinema->state_code = "SC";
		$cinema->city = "Blumenau";
		$cinema->lat = "-26.9200174";
		$cinema->long = "-49.0681415";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>