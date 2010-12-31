<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class uci_orient_m_iguatemi extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "UCI Orient M.Iguatemi";
		$cinema->address = "Av. Tancredo Neves, 148 - Caminho das Árvore, Salvador - Bahia, 41820-020, Brazil";
		$cinema->state = "Bahia";
		$cinema->state_code = "BA";
		$cinema->city = "Salvador";
		$cinema->lat = "-12.9782685";
		$cinema->long = "-38.4614728";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Cama%C3%A7ari+BA&amp;tid=b1747a972a08837a";
	}

}
?>