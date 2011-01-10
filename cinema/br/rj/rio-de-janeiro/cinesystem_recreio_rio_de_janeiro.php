<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_recreio_rio_de_janeiro extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "94d2ad9af620b12d";
		$cinema->name = "Cinesystem Recreio - Rio de Janeiro";
		$cinema->address = "Av. das Américas, 19019 - Recreio dos Bandeirantes, Rio de Janeiro, 22790-703, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-23.0206864";
		$cinema->long = "-43.4910377";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Itagua%C3%AD+RJ&tid=94d2ad9af620b12d";
	}

}
?>