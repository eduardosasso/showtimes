<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class gnc_caxias extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "73238fb398f64201";
		$cinema->name = "GNC Caxias";
		$cinema->address = "";
		$cinema->phone = "(0xx)54 3214-9166";
		$cinema->state = "";
		$cinema->state_code = "";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alto+Feliz+RS&tid=73238fb398f64201";
	}

}
?>