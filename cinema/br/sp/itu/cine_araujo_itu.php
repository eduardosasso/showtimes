<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_itu extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "75faf9d16c7f5b2d";
		$cinema->name = "Cine Araújo Itú";
		$cinema->address = "Rod. Mal. Rondon, 105 - Chácara Flórida, Itu - São Paulo, 13312-250, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Itu";
		$cinema->lat = "-23.2545139";
		$cinema->long = "-47.343573";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alum%C3%ADnio+SP&tid=75faf9d16c7f5b2d";
	}

}
?>