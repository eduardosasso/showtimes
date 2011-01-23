<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_flamboyant extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4838d6e08ff32ddd";
		$cinema->name = "Cinemark Flamboyant";
		$cinema->address = "Av. Jamel Cecílio - Jardim Goiás, Goiânia - GO, 74810-100, Brazil";
		$cinema->phone = "(0xx)62 3515-1819";
		$cinema->state = "Goiás";
		$cinema->state_code = "GO";
		$cinema->city = "Goiânia";
		$cinema->lat = "-16.7071317";
		$cinema->long = "-49.2385574";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "23";
	}
	protected function get_id_cinema_do_site() {
		return "893";
	}

}
?>