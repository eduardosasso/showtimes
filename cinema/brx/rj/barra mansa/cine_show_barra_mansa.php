<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_show_barra_mansa extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Show Barra Mansa";
		$cinema->address = "Av. Joaquim Leite, 577 - Barra Mansa - Rio de Janeiro, 27345-391, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Barra Mansa";
		$cinema->lat = "-22.5447646";
		$cinema->long = "-44.1739409";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Barra+do+Pira%C3%AD+RJ&amp;tid=52ac29dc6228ec0";
	}

}
?>