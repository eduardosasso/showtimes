<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class gnc_moinhos extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "1190019ea0b1645a";
		$cinema->name = "GNC Moinhos";
		$cinema->address = "R. Olavo Barreto Viana, 36 - Moinhos de Vento, Porto Alegre - Rio Grande do Sul, 90570-070, Brazil";
		$cinema->phone = "(0xx)51 3395-3875";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0242825";
		$cinema->long = "-51.2011128";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alvorada+RS&tid=1190019ea0b1645a";
	}

}
?>