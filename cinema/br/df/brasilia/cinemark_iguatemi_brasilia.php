<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_iguatemi_brasilia extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "895fbba915944751";
		$cinema->name = "Cinemark Iguatemi Brasília";
		$cinema->address = "Lago Norte, Brasília - Brazilian Federal District, 71503-504, Brazil";
		$cinema->phone = "(0xx)61 3577-5140";
		$cinema->state = "Distrito Federal";
		$cinema->state_code = "DF";
		$cinema->city = "Brasilia";
		$cinema->lat = "-15.7203232";
		$cinema->long = "-47.8859679";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "14";
	}
	protected function get_id_cinema_do_site() {
		return "769";
	}

}
?>