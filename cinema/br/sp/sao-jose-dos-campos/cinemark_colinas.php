<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_colinas extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "44bd153f9dc05fc";
		$cinema->name = "Cinemark Colinas";
		$cinema->address = "Av. São João, 2200 - Jardim Colinas, São José dos Campos - São Paulo, 12242-000, Brazil";
		$cinema->phone = "(0xx)12 3923-2268";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "São José dos Campos";
		$cinema->lat = "-23.2086551";
		$cinema->long = "-45.9087642";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "5";
	}
	protected function get_id_cinema_do_site() {
		return "712";
	}

}
?>