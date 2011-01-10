<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class gnc_lindoia extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "5841ccbe8eb30e8b";
		$cinema->name = "GNC Lindóia";
		$cinema->address = "Av. Assis Brasil, 3522 - Jardim Lindóia, Porto Alegre - Rio Grande do Sul, 91010-007, Brazil";
		$cinema->phone = "(0xx)51 3340-3097";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0103321";
		$cinema->long = "-51.151507";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alvorada+RS&tid=5841ccbe8eb30e8b";
	}

}
?>