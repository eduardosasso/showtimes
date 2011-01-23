<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_carioca_shopping extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "c23694a0c3eb8bb0";
		$cinema->name = "Cinemark Carioca Shopping";
		$cinema->address = "Av. Vicente de Carvalho, 909 - Vicente de Carvalho, Rio de Janeiro, 21210-002, Brazil";
		$cinema->phone = "(0xx)21 3688-2337";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Rio de Janeiro";
		$cinema->lat = "-22.8506704";
		$cinema->long = "-43.3099164";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "9";
	}
	protected function get_id_cinema_do_site() {
		return "692";
	}

}
?>