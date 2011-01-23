<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cineplex_diamond_mall extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d3abd8ec709b";
		$cinema->name = "Cineplex Diamond Mall";
		$cinema->address = "Av. Olegário Maciel, 1600 - Santo Agostinho, Belo Horizonte - Minas Gerais, 30180-110, Brazil";
		$cinema->phone = "(0xx)31 3292-9026";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Belo Horizonte";
		$cinema->lat = "-19.927629";
		$cinema->long = "-43.9465735";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "21";
	}
	protected function get_id_cinema_do_site() {
		return "767";
	}

}
?>