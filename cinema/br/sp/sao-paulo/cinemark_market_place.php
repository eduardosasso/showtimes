<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_market_place extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "9baaddca01eab8af";
		$cinema->name = "Cinemark Market Place";
		$cinema->address = "Av. Dr. Chucri Zaidan, 920 - Santo Amaro, Sao Paulo - São Paulo, 04583-110, Brazil";
		$cinema->phone = "(0xx)11 3048-7405";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.6217898";
		$cinema->long = "-46.6990798";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "1";
	}
	protected function get_id_cinema_do_site() {
		return "688";
	}

}
?>