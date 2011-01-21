<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Mal. Deodoro, 238 - Centro Bento Gonçalves - RS, 95700-000, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoiris_marcopolo extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d35f9fe06f3c";
		$cinema->name = "Arcoiris Marcopolo";
		$cinema->address = "R. Mal. Deodoro, 238 - Centro, Bento Gonçalves - Rio Grande do Sul, 95700-000, Brazil";
		$cinema->phone = "(0xx)54 3452-4694";
		$cinema->state = "Rio Grande do Sul";
		$cinema->state_code = "RS";
		$cinema->city = "Bento Gonçalves";
		$cinema->lat = "-29.1695438";
		$cinema->long = "-51.5176799";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "67040";
	}
	protected function get_id_cinema_do_site() {
		return "1011";
	}

}
?>