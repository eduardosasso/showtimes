<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_taguatinga_shopping extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d39f408d4ce8";
		$cinema->name = "Cinemark Taguatinga Shopping";
		$cinema->address = "Qs 1 Rua 210 - Taguatinga, Brasília - Brazilian Federal District, 71950-770, Brazil";
		$cinema->phone = "(0xx)61 3352-4708";
		$cinema->state = "Distrito Federal";
		$cinema->state_code = "DF";
		$cinema->city = "Brasilia";
		$cinema->lat = "-15.8384402";
		$cinema->long = "-48.0470847";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "17";
	}
	protected function get_id_cinema_do_site() {
		return "718";
	}

}
?>