<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinesystem_shopping_joao_pessoa_poa extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cinesystem Shopping João Pessoa - POA";
		$cinema->address = "Av. João Pessoa, 1831 - Santana, Porto Alegre - Rio Grande do Sul, 90040-001, Brazil";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Porto Alegre";
		$cinema->lat = "-30.0458519";
		$cinema->long = "-51.212915";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alvorada+RS&amp;tid=f848db8fe836f824";
	}

}
?>