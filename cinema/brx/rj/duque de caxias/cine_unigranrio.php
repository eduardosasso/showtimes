<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_unigranrio extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Unigranrio";
		$cinema->address = "R. Prof. José de Souza Herdy - Jardim Vinte e Cinco de Agosto, Duque de Caxias - Rio de Janeiro, 25071-202, Brazil";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Duque de Caxias";
		$cinema->lat = "-22.7913701";
		$cinema->long = "-43.3025262";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&amp;tid=5ed8d07253ac646";
	}

}
?>