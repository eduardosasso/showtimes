<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_10_sulacap extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "26580540996da4cc";
		$cinema->name = "Cine 10 Sulacap";
		$cinema->address = "Av. Mal. Fontineli, 3555 - Jardim Sulacap, Rio de Janeiro, 21740-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.8848918";
		$cinema->long = "-43.4031337";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Belford+Roxo+RJ&tid=26580540996da4cc";
	}

}
?>