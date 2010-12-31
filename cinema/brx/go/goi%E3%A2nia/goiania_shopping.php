<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class goiania_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Goiania Shopping";
		$cinema->address = "GO-060 - Goiânia - GO, Brazil";
		$cinema->state = "Goiás";
		$cinema->state_code = "GO";
		$cinema->city = "Goiânia";
		$cinema->lat = "-16.65972";
		$cinema->long = "-49.3633891";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Abadia+de+Goi%C3%A1s+GO&amp;tid=ec1438d39a9225d1";
	}

}
?>