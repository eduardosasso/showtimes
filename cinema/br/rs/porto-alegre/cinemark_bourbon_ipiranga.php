<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_bourbon_ipiranga extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "8ae8a7a6a67628ba";
		$cinema->name = "Cinemark Bourbon Ipiranga";
		$cinema->address = "Av. Ipiranga, 5200 - Jardim Botânico, Porto Alegre - Rio Grande do Sul, 90160-001, Brazil";
		$cinema->phone = "(0xx)51 3315-4299";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0557599";
		$cinema->long = "-51.1875558";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "11";
	}
	protected function get_id_cinema_do_site() {
		return "695";
	}
	
}
?>