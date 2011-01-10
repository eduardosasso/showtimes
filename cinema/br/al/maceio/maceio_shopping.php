<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class maceio_shopping extends GoogleMoviesAdapter {

	public function get_cinema() {
		$cinema = new Cinema();
		$cinema->id = "ec2f25482e0ea45f";
		$cinema->name = "Maceió Shopping";
		$cinema->address = "Av. Comendador Gustavo Paiva, 2990 - Jacintinho, Maceió - Alagoas, 57038-000, Brazil";
		$cinema->phone = "(0xx)82 357-1222";
		$cinema->state = "Alagoas";
		$cinema->state_code = "AL";
		$cinema->city = "Maceió";
		$cinema->lat = "-9.6380106";
		$cinema->long = "-35.7043029";

		return $cinema;			
	}

	public function get_url() {
		return "http://google.com.br/movies?near=Atalaia+AL&tid=ec2f25482e0ea45f";
	}

}
?>