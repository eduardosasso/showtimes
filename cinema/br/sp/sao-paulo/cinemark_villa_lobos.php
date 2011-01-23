<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_villa_lobos extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "98ce1026c242363d";
		$cinema->name = "Cinemark Villa Lobos";
		$cinema->address = "Av. das Nações Unidas, 4777 - Alto de Pinheiros, Sao Paulo - São Paulo, 05477-000, Brazil";
		$cinema->phone = "(0xx)11 3024-3851";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5510448";
		$cinema->long = "-46.7241876";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "1";
	}
	protected function get_id_cinema_do_site() {
		return "727";
	}

}
?>