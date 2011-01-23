<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_extra_anchieta extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4c5dc55c756aaa0a";
		$cinema->name = "Cinemark Extra Anchieta";
		$cinema->address = "R. Garcia Lorca, 301 - Paulicéia, São Bernardo do Campo - São Paulo, 09695-000, Brazil";
		$cinema->phone = "(0xx)11 4362-4706";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "São Bernardo do Campo";
		$cinema->lat = "-23.6719654";
		$cinema->long = "-46.5731408";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "3";
	}
	protected function get_id_cinema_do_site() {
		return "724";
	}

}
?>