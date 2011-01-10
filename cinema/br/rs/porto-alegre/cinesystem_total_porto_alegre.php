<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_total_porto_alegre extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "1f76f971434a044";
		$cinema->name = "Cinesystem Total - Porto Alegre";
		$cinema->address = "Av. Cristóvão Colombo, 545 - Floresta, Porto Alegre - Rio Grande do Sul, 90560-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0253668";
		$cinema->long = "-51.2123221";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alvorada+RS&tid=1f76f971434a044";
	}

}
?>