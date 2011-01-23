<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_metro_tatuape extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "8e353c36a0c49093";
		$cinema->name = "Cinemark Metrô Tatuapé";
		$cinema->address = "R. Domingos Agostim, 91 - Tatuapé, Sao Paulo - São Paulo, 03306-010, Brazil";
		$cinema->phone = "(0xx)11 6192-9300";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5419379";
		$cinema->long = "-46.5754681";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "1";
	}
	protected function get_id_cinema_do_site() {
		return "711";
	}
}
?>