<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_eldorado extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "64e3afb4e454a30d";
		$cinema->name = "Cinemark Eldorado";
		$cinema->address = "Av. Rebouças, 3970 - Pinheiros, Sao Paulo - São Paulo, 05402-600, Brazil";
		$cinema->phone = "(0xx)11 2197-7470";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5740704";
		$cinema->long = "-46.6966115";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "1";
	}
	protected function get_id_cinema_do_site() {
		return "715";
	}

}
?>