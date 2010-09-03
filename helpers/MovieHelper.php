<?php
class MovieHelper{
	
	public function get_movie_posters($movie){
		$movie_aux = urlencode($movie . ' poster');
		$timex = time();

		$req = "http://pipes.yahoo.com/pipes/pipe.run?ImageTerms=$movie_aux&_id=6f9a1208350a1483ea05aca3596f9f05&_render=php&x=$timex";
		$phpserialized = file_get_contents($req);

		$posters_aux = unserialize($phpserialized);

		foreach ($posters_aux['value']['items'] as $key => $value) {
			$posters[] = $value['title'];
		}

		return $posters;
	}

	public function get_movie_trailers($movie){
		$movie_aux = urlencode($movie . ' trailer');
		$timex = time();

		//youtube search pipes
		$req = "http://pipes.yahoo.com/pipes/pipe.run?_id=c1fc59f94876e3632794477c40828721&_render=php&textinput1=$movie_aux&x=$timex";
		$phpserialized = file_get_contents($req);

		$posters_aux = unserialize($phpserialized);

		foreach ($posters_aux['value']['items'] as $key => $value) {
			$trailers[] = $value['title'];
		}

		return $trailers;

	}

}	

?>