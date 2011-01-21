<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=Av. Santos Dumont, 3131 - Aldeota Fortaleza - CE, 60150-161, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_del_paseo extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d360b186508a";
		$cinema->name = "Arcoiris Del Paseo";
		$cinema->address = "Av. Santos Dumont, 3131 - Aldeota, Fortaleza - Ceará, 60150-161, Brazil";
		$cinema->phone = "(0xx)85 3264-0375";
		$cinema->state = "Ceara";
		$cinema->state_code = "CE";
		$cinema->city = "Fortaleza";
		$cinema->lat = "-3.7367366";
		$cinema->long = "-38.4966506";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "12149";
	}
	protected function get_id_cinema_do_site() {
		return "1019";
	}

}
?>