<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class ultravisao_pocos_de_caldas extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Ultravisão - Poços de Caldas";
		$cinema->address = "R. Rio Grande do Sul, 1007 - Poços de Caldas - Minas Gerais, 37701-001, Brazil";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "SP";
		$cinema->city = "Poços de Caldas";
		$cinema->lat = "-21.7860487";
		$cinema->long = "-46.5645263";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>