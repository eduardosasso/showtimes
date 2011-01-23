<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_barigui extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "1049e1132df20f72";
		$cinema->name = "Cinemark Barigui";
		$cinema->address = "R. Prof. Pedro Viriato Parigot de Souza, 600 - Campina do Siqueira, Curitiba - Paraná, 81200-100, Brazil";
		$cinema->phone = "(0xx)41 3317-6419";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Curitiba";
		$cinema->lat = "-25.4367677";
		$cinema->long = "-49.3144143";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "18";
	}
	protected function get_id_cinema_do_site() {
		return "700";
	}

}
?>