<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_sao_jose_dos_pinhais extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "96f33ae75d10fb6b";
		$cinema->name = "Cinemark São José dos Pinhais";
		$cinema->address = "R. Izabel A Redentora, 1434 - Centro, São José dos Pinhais - Paraná, 83005-010, Brazil";
		$cinema->phone = "";
		$cinema->state = "Parana";
		$cinema->state_code = "PR";
		$cinema->city = "São José dos Pinhais";
		$cinema->lat = "-25.5374251";
		$cinema->long = "-49.2045423";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "28";
	}
	protected function get_id_cinema_do_site() {
		return "894";
	}

}
?>