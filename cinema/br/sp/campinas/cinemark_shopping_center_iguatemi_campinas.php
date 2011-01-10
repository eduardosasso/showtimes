<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_shopping_center_iguatemi_campinas extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "8f876c5773a0c0fe";
		$cinema->name = "Cinemark Shopping Center Iguatemi Campinas";
		$cinema->address = "Av. Iguatemi, 777 - Vila Brandina, Campinas - São Paulo, 13092-500, Brazil";
		$cinema->phone = "(0xx)19 3253-3006";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Campinas";
		$cinema->lat = "-22.8938152";
		$cinema->long = "-47.0263188";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Americana+SP&tid=8f876c5773a0c0fe";
	}

}
?>