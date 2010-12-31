<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_villa_lobos extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinemark Villa Lobos";
		$cinema->address = "Av. das Nações Unidas, 4777 - Alto de Pinheiros, Sao Paulo - São Paulo, 05477-000, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5510448";
		$cinema->long = "-46.7241876";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Ara%C3%A7ariguama+SP&amp;tid=98ce1026c242363d";
	}

}
?>