<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class gnc_iguatemi_porto_alegre extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "GNC Iguatemi Porto Alegre";
		$cinema->address = "Av. João Wallig, 1800 - Passo da Areia, Porto Alegre - Rio Grande do Sul, 09134-000, Brazil";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0225646";
		$cinema->long = "-51.1634852";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alvorada+RS&amp;tid=8731d7134e5b461a";
	}

}
?>