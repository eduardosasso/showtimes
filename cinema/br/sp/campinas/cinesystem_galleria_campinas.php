<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_galleria_campinas extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "e09fa096949c9a2";
		$cinema->name = "Cinesystem Galleria - Campinas";
		$cinema->address = "R. Dom Pedro I, 131 - Jardim Guanabara, Campinas - São Paulo, 13073-003, Brazil";
		$cinema->phone = "(0xx)19 4005-9040";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Campinas";
		$cinema->lat = "-22.8857914";
		$cinema->long = "-47.0674831";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Americana+SP&tid=e09fa096949c9a2";
	}

}
?>