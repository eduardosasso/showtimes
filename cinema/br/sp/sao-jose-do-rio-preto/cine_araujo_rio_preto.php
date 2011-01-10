<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_rio_preto extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d9565a79d5f9c2";
		$cinema->name = "Cine Araújo Rio Preto";
		$cinema->address = "Av. Brg. Faria Lima, 6363 - Jardim Morumbi, São José do Rio Preto - São Paulo, 15090-000, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "São José do Rio Preto";
		$cinema->lat = "-20.8357511";
		$cinema->long = "-49.4003161";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bady+Bassitt+SP&tid=4d9565a79d5f9c2";
	}

}
?>