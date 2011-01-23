<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_osasco extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "26ca2ea67e3c4c4a";
		$cinema->name = "Cinemark Osasco";
		$cinema->address = "Av. dos Autonomistas, 1400 - Industrial Autonomistas, Osasco - São Paulo, 06194-050, Brazil";
		$cinema->phone = "(0xx)11 3184-5120";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Osasco";
		$cinema->lat = "-23.54117";
		$cinema->long = "-46.7672421";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "29";
	}
	protected function get_id_cinema_do_site() {
		return "757";
	}

}
?>