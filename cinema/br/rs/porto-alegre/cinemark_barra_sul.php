<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_barra_sul extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4e73b916423b69c2";
		$cinema->name = "Cinemark Barra Sul";
		$cinema->address = "Av. Diário de Notícias, 300 - Cristal, Porto Alegre - Rio Grande do Sul, 90810-080, Brazil";
		$cinema->phone = "";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0829022";
		$cinema->long = "-51.24684";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "11";
	}
	protected function get_id_cinema_do_site() {
		return "704";
	}
	

}
?>