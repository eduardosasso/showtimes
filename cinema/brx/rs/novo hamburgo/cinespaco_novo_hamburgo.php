<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinespaco_novo_hamburgo extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinespaço Novo Hamburgo";
		$cinema->address = "Av. Nações Unidas, 2001 - Santo Afonso, Novo Hamburgo - Rio Grande do Sul, 93320-021, Brazil";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Novo Hamburgo";
		$cinema->lat = "-29.7325431";
		$cinema->long = "-51.1262664";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alvorada+RS&amp;tid=e6fa9769b202b3b0";
	}

}
?>