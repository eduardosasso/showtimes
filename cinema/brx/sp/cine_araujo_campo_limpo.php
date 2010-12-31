<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_campo_limpo extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Araújo Campo Limpo";
		$cinema->address = "";
		$cinema->state = "";
		$cinema->state_code = "SP";
		$cinema->city = "";
		$cinema->lat = "";
		$cinema->long = "";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ara%C3%A7ariguama+SP&amp;tid=bb375825ed42e975";
	}

}
?>