<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_downtown extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d39e78584e32";
		$cinema->name = "Cinemark Downtown";
		$cinema->address = "Av. das Américas, 500 - Barra da Tijuca, Rio de Janeiro, 22640-100, Brazil";
		$cinema->phone = "(0xx)21 2494-5004";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-23.0042351";
		$cinema->long = "-43.3206923";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "9";
	}
	protected function get_id_cinema_do_site() {
		return "719";
	}

}
?>