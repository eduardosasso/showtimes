<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cinemark_center_norte extends CinemarkAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "5789139e6ee286fc";
		$cinema->name = "Cinemark Center Norte";
		$cinema->address = "Travessa Casalbuono, 127 - Vila Guilherme, Sao Paulo - São Paulo, 02047-050, Brazil";
		$cinema->phone = "(0xx)11 6222-2395";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sao Paulo";
		$cinema->lat = "-23.5175164";
		$cinema->long = "-46.6172113";

		return $cinema;			
	}

	protected function get_id_cidade_do_site() {
		return "1";
	}
	protected function get_id_cinema_do_site() {
		return "699";
	}

}
?>