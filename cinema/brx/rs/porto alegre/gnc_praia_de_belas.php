<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class gnc_praia_de_belas extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "GNC Praia de Belas";
		$cinema->address = "Av. Praia de Belas, 1181 - Menino Deus, Porto Alegre - Rio Grande do Sul, 90110-000, Brazil";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0526798";
		$cinema->long = "-51.2286081";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alvorada+RS&amp;tid=3da78e9498a5254c";
	}

}
?>