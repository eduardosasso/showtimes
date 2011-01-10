<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_piracicaba extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "a112ddb789c700ef";
		$cinema->name = "Cine Araújo Piracicaba";
		$cinema->address = "Av. Limeira, 722 - Areião, Piracicaba - São Paulo, 13414-018, Brazil";
		$cinema->phone = "(0xx)19 3413-0590";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Piracicaba";
		$cinema->lat = "-22.7029122";
		$cinema->long = "-47.6500685";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=%C3%81guas+de+S%C3%A3o+Pedro+SP&tid=a112ddb789c700ef";
	}

}
?>