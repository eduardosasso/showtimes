<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemais_guaratingueta extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "f6dd3078ff33b74d";
		$cinema->name = "Cinemais Guaratinguetá";
		$cinema->address = "Av. Pres. Juscelino Kubitschek de Oliveira - Lorena - São Paulo, 12603-240, Brazil";
		$cinema->phone = "(0xx)12 3133-4509";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Lorena";
		$cinema->lat = "-22.7146164";
		$cinema->long = "-45.1129179";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Delfim+Moreira+MG&tid=f6dd3078ff33b74d";
	}

}
?>