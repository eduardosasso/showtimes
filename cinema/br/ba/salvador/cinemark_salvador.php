<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_salvador extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "6732fc99d44c68fd";
		$cinema->name = "Cinemark Salvador";
		$cinema->address = "Av. Tancredo Neves, 2915 - Caminho das Árvore, Salvador - Bahia, 41820-021, Brazil";
		$cinema->phone = "(0xx)71 3443-1870";
		$cinema->state = "Bahia";
		$cinema->state_code = "BA";
		$cinema->city = "Salvador";
		$cinema->lat = "-12.9755255";
		$cinema->long = "-38.4579834";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "26";
	}
	protected function get_id_cinema_do_site() {
		return "785";
	}

}
?>