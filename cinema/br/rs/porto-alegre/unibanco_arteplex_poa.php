<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class unibanco_arteplex_poa extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "47d299aa2e1e0ba3";
		$cinema->name = "Unibanco Arteplex POA";
		$cinema->address = "Av. Túlio de Rose, 80 - Passo da Areia, Porto Alegre - Rio Grande do Sul, 91340-110, Brazil";
		$cinema->phone = "(0xx)51 3299-0624";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0226949";
		$cinema->long = "-51.1617958";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alvorada+RS&tid=47d299aa2e1e0ba3";
	}

}
?>