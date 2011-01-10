<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_show_nova_friburgo extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "3e2c1980343ead86";
		$cinema->name = "Cine Show Nova Friburgo";
		$cinema->address = "Pc Pres Getúlio Vargas, 139 Nova Friburgo - RJ, 28610-175";
		$cinema->phone = "(0xx)22 2523-1626";
		$cinema->state = "Rio de Janeiro";
		$cinema->state_code = "RJ";
		$cinema->city = "Nova Friburgo";
		$cinema->lat = "-22.2871356";
		$cinema->long = "-42.5336979";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Bom+Jardim+RJ&tid=3e2c1980343ead86";
	}

}
?>