<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_shopping_d extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "f1c1b938448630c8";
		$cinema->name = "Cinemark Shopping D";
		$cinema->address = "Av. Cruzeiro do Sul, 1100 - Pari, Sao Paulo - São Paulo, 03033-020, Brazil";
		$cinema->phone = "(0xx)11 3326-9171";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5231418";
		$cinema->long = "-46.6251884";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "1";
	}
	protected function get_id_cinema_do_site() {
		return "687";
	}

}
?>