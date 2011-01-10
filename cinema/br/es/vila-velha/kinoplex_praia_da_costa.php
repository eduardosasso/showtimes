<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class kinoplex_praia_da_costa extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "b34a591d8f79b5f8";
		$cinema->name = "Kinoplex Praia da Costa";
		$cinema->address = "Av. Carioca, 353 - Praia da Costa, Vila Velha - ES, Brazil";
		$cinema->phone = "";
		$cinema->state = "Espírito Santo";
		$cinema->state_code = "ES";
		$cinema->city = "Vila Velha";
		$cinema->lat = "-20.3399398";
		$cinema->long = "-40.2874766";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cariacica+ES&tid=b34a591d8f79b5f8";
	}

}
?>