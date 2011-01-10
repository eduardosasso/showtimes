<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class north_shopping_fortaleza extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "30c6e69aa16c3371";
		$cinema->name = "North Shopping Fortaleza";
		$cinema->address = "Av. Bezerra de Menezes, 2450 - Pres. Kennedy, Fortaleza - Ceará, 60325-002, Brazil";
		$cinema->phone = "";
		$cinema->state = "Ceara";
		$cinema->state_code = "CE";
		$cinema->city = "Fortaleza";
		$cinema->lat = "-3.7360198";
		$cinema->long = "-38.5667786";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Aquiraz+CE&tid=30c6e69aa16c3371";
	}

}
?>