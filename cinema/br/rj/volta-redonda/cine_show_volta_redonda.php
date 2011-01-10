<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_show_volta_redonda extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4e03cb368426efd4";
		$cinema->name = "Cine Show Volta Redonda";
		$cinema->address = "Volta Redonda - Rio de Janeiro, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Volta Redonda";
		$cinema->lat = "-22.5251514";
		$cinema->long = "-44.1037794";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Passa-Vinte+MG&tid=4e03cb368426efd4";
	}

}
?>