<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class gnc_caxias extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "73238fb398f64201";
		$cinema->name = "GNC Caxias";
		$cinema->address = "Estr. Rota do Sol 2780  - Caxias do Sul - Rio Grande do Sul, Brazil";
		$cinema->phone = "(0xx)54 3214-9166";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Caxias do Sul";
		$cinema->lat = "-29.1324495";
		$cinema->long = "-51.1224354";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alto+Feliz+RS&tid=73238fb398f64201";
	}

}
?>