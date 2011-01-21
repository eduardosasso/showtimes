<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_esplanada_shopping_i extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "e213596b60c1b06c";
		$cinema->name = "Cine Araújo Esplanada Shopping I";
		$cinema->address = "Av. Gisele Constantino - Jardim Residencial Tivoli Park, Sorocaba - São Paulo, 18110-650, Brazil";
		$cinema->phone = "";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Sorocaba";
		$cinema->lat = "-23.5441569";
		$cinema->long = "-47.4666991";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Alum%C3%ADnio+SP&tid=e213596b60c1b06c";
	}

}
?>