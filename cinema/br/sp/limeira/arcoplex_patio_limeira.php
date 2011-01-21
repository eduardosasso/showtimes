<?php 
//http://maps.googleapis.com/maps/api/geocode/json?address=R. Tiradentes, 1422 - São João - Paraíso Limeira - São Paulo, 13480-083, Brazil&sensor=false

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class arcoplex_patio_limeira extends ArcoirisAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "4d361c3b7a9cc";
		$cinema->name = "Arcoplex Patio Limeira";
		$cinema->address = "R. Tiradentes, 1422 - São João - Paraíso, Limeira - São Paulo, 13480-083, Brazil";
		$cinema->phone = "(0xx)19 3443-3003";
		$cinema->state = "São Paulo";
		$cinema->state_code = "SP";
		$cinema->city = "Limeira";
		$cinema->lat = "-22.572188";
		$cinema->long = "-47.4087085";
		$cinema->site = "http://www.arcoiriscinemas.com.br/";

		return $cinema;
	}

	protected function get_id_cidade_do_site() {
		return "84921";
	}
	protected function get_id_cinema_do_site() {
		return "1036";
	}

}
?>