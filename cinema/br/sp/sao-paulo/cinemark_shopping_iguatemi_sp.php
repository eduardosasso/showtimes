<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_shopping_iguatemi_sp extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "f3e5ba6aca61d544";
		$cinema->name = "Cinemark Shopping Iguatemi SP";
		$cinema->address = "Av. Brg. Faria Lima, 2232 - Pinheiros, Sao Paulo - São Paulo, 01451-000, Brazil";
		$cinema->phone = "(0xx)11 3815-3389";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5756678";
		$cinema->long = "-46.6879563";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "1";
	}
	protected function get_id_cinema_do_site() {
		return "707";
	}
}
?>