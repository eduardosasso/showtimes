<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_paulista extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "6ef991cbe1550c6f";
		$cinema->name = "Cinemark Paulista";
		$cinema->address = "R. Treze de Maio, 1947 - Bela Vista, Sao Paulo - São Paulo, 01327-001, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5703001";
		$cinema->long = "-46.6436619";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "1";
	}
	protected function get_id_cinema_do_site() {
		return "723";
	}

}
?>