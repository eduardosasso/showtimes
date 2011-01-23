<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_guarulhos extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "7ad8893dde095c3c";
		$cinema->name = "Cinemark Guarulhos";
		$cinema->address = "Rod. Pres. Dutra - Guarulhos - São Paulo, Brazil";
		$cinema->phone = "(0xx)11 2425-0665";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Guarulhos";
		$cinema->lat = "-23.4533734";
		$cinema->long = "-46.4694917";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "27";
	}
	protected function get_id_cinema_do_site() {
		return "759";
	}

}
?>