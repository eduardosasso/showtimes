<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_shopping_jardins_aracaju extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "470b626d068b5944";
		$cinema->name = "Cinemark Shopping Jardins Aracajú";
		$cinema->address = "Avenida Min Geraldo Barreto Sobral, 215 Aracaju - SE, 49026-010";
		$cinema->phone = "(0xx)79 3217-5610";
		$cinema->state = "Sergipe";
		$cinema->state_code = "SE";
		$cinema->city = "Aracajú";
		$cinema->lat = "-10.9430537";
		$cinema->long = "-37.0594436";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "10";
	}
	protected function get_id_cinema_do_site() {
		return "706";
	}

}
?>
