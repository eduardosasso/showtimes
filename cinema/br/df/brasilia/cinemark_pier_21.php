<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_pier_21 extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "2bb9a5da2eaeaf9f";
		$cinema->name = "Cinemark Pier 21";
		$cinema->address = "SCES Tr 2 s/n LT32/33S DG - Brasília - DF, 70200-002, Brazil";
		$cinema->phone = "(0xx)61 3223-7506";
		$cinema->state = "Distrito Federal";
		$cinema->state_code = "DF";
		$cinema->city = "Brasília";
		$cinema->lat = "-15.8167276";
		$cinema->long = "-47.8563203";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bras%C3%ADlia+DF&tid=2bb9a5da2eaeaf9f";
	}

}
?>