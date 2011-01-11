<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_campo_limpo extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "bb375825ed42e975";
		$cinema->name = "Cine Araújo Campo Limpo";
		$cinema->address = "Estr. do Campo Limpo, 459 - Campo Limpo, Sao Paulo - São Paulo, 05777-001, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Campo Limpo";
		$cinema->lat = "-23.6482906";
		$cinema->long = "-46.7587087";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ara%C3%A7ariguama+SP&tid=bb375825ed42e975";
	}

}
?>