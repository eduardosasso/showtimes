<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class cine_araujo_londrina extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "9cb0b4dbefd372e2";
		$cinema->name = "Cine Araújo Londrina";
		$cinema->address = "Rodovia Celso Garcia Cid - Jardim Portal de Versalhes 1 Londrina - PR";
		$cinema->phone = "(0xx)43 3336-7177";
		$cinema->state = "Paraná";
		$cinema->state_code = "PR";
		$cinema->city = "Londrina";
		$cinema->lat = "-23.29273";
		$cinema->long = "-51.1732073";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Arapongas+PR&tid=9cb0b4dbefd372e2";
	}

}
?>