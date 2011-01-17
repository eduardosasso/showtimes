<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class espaco_rio_design extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "79586f8c4e080547";
		$cinema->name = "Espaço Rio Design";
		$cinema->address = "Av. das Américas, 7777 - Barra da Tijuca, Rio de Janeiro, 22793-081, Brazil";
		$cinema->phone = "(0xx)21 2438-7590";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-23.0003583";
		$cinema->long = "-43.4038385";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Mesquita+RJ&tid=79586f8c4e080547";
	}

}
?>