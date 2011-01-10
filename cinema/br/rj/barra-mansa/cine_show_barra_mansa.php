<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_show_barra_mansa extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "52ac29dc6228ec0";
		$cinema->name = "Cine Show Barra Mansa";
		$cinema->address = "Av. Joaquim Leite, 577 - Barra Mansa - Rio de Janeiro, 27345-391, Brazil";
		$cinema->phone = "(0xx)24 3342-5604";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Barra Mansa";
		$cinema->lat = "-22.5447646";
		$cinema->long = "-44.1739409";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Passa-Vinte+MG&tid=52ac29dc6228ec0";
	}

}
?>