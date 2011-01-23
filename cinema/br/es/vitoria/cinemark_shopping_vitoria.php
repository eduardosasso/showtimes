<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_shopping_vitoria extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d3ac4261e74f";
		$cinema->name = "Cinemark Shopping Vitoria";
		$cinema->address = "Av. Américo Buaiz, 200 - Enseada do Suá, Vitoria - ES, 29050-902, Brazil";
		$cinema->phone = "(0xx)27 3324-5973";
		$cinema->state = "Espírito Santo";
		$cinema->state_code = "ES";
		$cinema->city = "Vitoria";
		$cinema->lat = "-20.3143594";
		$cinema->long = "-40.290971";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "25";
	}
	protected function get_id_cinema_do_site() {
		return "702";
	}

}
?>