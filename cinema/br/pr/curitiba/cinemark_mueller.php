<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_mueller extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4ee7d71cb53d59b5";
		$cinema->name = "Cinemark Mueller";
		$cinema->address = "Av. Cândido de Abreu, 127 - Centro Cívico, Curitiba - Paraná, 80530-000, Brazil";
		$cinema->phone = "(0xx)41 3322-0296";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "Curitiba";
		$cinema->lat = "-25.4230611";
		$cinema->long = "-49.2700045";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "18";
	}
	protected function get_id_cinema_do_site() {
		return "698";
	}

}
?>