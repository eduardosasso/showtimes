<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_riomar extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "ed5edba63dc066a6";
		$cinema->name = "Cinemark RioMar";
		$cinema->address = "R. Delmiro Gouveia, 268 - Atalaia, Aracaju - Sergipe, 49035-810, Brazil";
		$cinema->phone = "(0xx)79 3238-0808";
		$cinema->state = "Sergipe";
		$cinema->state_code = "SE";
		$cinema->city = "Aracaju";
		$cinema->lat = "-10.9524866";
		$cinema->long = "-37.0451589";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "10";
	}
	protected function get_id_cinema_do_site() {
		return "755";
	}

}
?>