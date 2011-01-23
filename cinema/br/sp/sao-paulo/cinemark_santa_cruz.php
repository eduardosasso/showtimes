<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_santa_cruz extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "727627cf9d0ef2e9";
		$cinema->name = "Cinemark Santa Cruz";
		$cinema->address = "R. Domingos de Morais, 2564 - Vila Mariana, Sao Paulo - São Paulo, 04036-100, Brazil";
		$cinema->phone = "(0xx)11 3471-8070";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5986701";
		$cinema->long = "-46.636746";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "1";
	}
	protected function get_id_cinema_do_site() {
		return "684";
	}
}
?>