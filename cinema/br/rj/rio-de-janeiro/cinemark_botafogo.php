<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_botafogo extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "14d95a0ab8e69241";
		$cinema->name = "Cinemark Botafogo";
		$cinema->address = "Praia de Botafogo, 400 - Botafogo, Rio de Janeiro, 22250-040, Brazil";
		$cinema->phone = "(0xx)21 2237-9483";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.9475208";
		$cinema->long = "-43.1827546";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "9";
	}
	protected function get_id_cinema_do_site() {
		return "728";
	}

}
?>