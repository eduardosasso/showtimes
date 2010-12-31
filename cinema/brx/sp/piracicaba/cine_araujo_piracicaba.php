<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_piracicaba extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "";
		$cinema->name = "Cine Araújo Piracicaba";
		$cinema->address = "Av. Limeira, 722 - Areião, Piracicaba - São Paulo, 13414-018, Brazil";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Piracicaba";
		$cinema->lat = "-22.7029122";
		$cinema->long = "-47.6500685";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br";
	}

}
?>