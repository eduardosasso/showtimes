<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_canoas extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "c70aefdeb5d47367";
		$cinema->name = "Cinemark Canoas";
		$cinema->address = "Av. Guilherme Schell, 6750 - Centro, Canoas - Rio Grande do Sul, 92310-000, Brazil";
		$cinema->phone = "(0xx)51 3466-5230";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Canoas";
		$cinema->lat = "-29.9096861";
		$cinema->long = "-51.1812516";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alvorada+RS&tid=c70aefdeb5d47367";
	}

}
?>