<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_itu extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Araújo Itú";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "SP";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alum%C3%ADnio+SP&amp;tid=75faf9d16c7f5b2d";
	}

}
?>