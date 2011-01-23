<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_patio_savassi extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "cc9f86d3a73b93b2";
		$cinema->name = "Cinemark Pátio Savassi";
		$cinema->address = "Av. do Contorno, 6061 - São Pedro, Belo Horizonte - Minas Gerais, 30110-060, Brazil";
		$cinema->phone = "(0xx)31 3288-3805";
		$cinema->state = "Minas Gerais";
		$cinema->state_code = "MG";
		$cinema->city = "Belo Horizonte";
		$cinema->lat = "-19.940059";
		$cinema->long = "-43.9339849";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "21";
	}
	protected function get_id_cinema_do_site() {
		return "697";
	}

}
?>