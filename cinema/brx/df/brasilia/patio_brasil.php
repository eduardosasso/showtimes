<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class patio_brasil extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Pátio Brasil";
		$cinema->address = "Setor Sul Quadra Dois, 7 - Brazlândia, Brasília - Brazilian Federal District, Brazil";
		$cinema->state = "Distrito Federal";
		$cinema->state_code = "DF";
		$cinema->city = "Brasilia";
		$cinema->lat = "-15.6857572";
		$cinema->long = "-48.1926428";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bras%C3%ADlia+DF&amp;tid=6ab4b769f982deb";
	}

}
?>