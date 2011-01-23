<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_abc_plaza extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "377e7db7d415d997";
		$cinema->name = "Cinemark ABC Plaza";
		$cinema->address = "Av. Industrial, 600 - Centro, Santo André - São Paulo, 09080-500, Brazil";
		$cinema->phone = "(0xx)11 4979-5078";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Santo André";
		$cinema->lat = "-23.649896";
		$cinema->long = "-46.5325815";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "2";
	}
	protected function get_id_cinema_do_site() {
		return "713";
	}
}
?>