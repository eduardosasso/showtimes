<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_bourbon_sao_leopoldo extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinesystem Bourbon - São Leopoldo";
		$cinema->address = "R. Primeiro de Março, 821 - Centro, São Leopoldo - Rio Grande do Sul, 93010-210, Brazil";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "São Leopoldo";
		$cinema->lat = "-29.7687344";
		$cinema->long = "-51.1460593";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alvorada+RS&amp;tid=a1ce6bdc5d673f11";
	}

}
?>