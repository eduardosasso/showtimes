<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

abstract class GoogleMoviesAdapter extends AbstractCinemaAdapter{
	abstract protected function get_url();

	public function scrape() {		
		$cinema_url = $this->get_url();

		$curl_handle=curl_init();

		curl_setopt($curl_handle,CURLOPT_URL,$cinema_url);
		curl_setopt ($curl_handle, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; U; FreeBSDi386; en-US; rv:1.2a) Gecko/20021021");
		curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7'));
		curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);  
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);

		$html = str_get_html($buffer);

		$theater = $html->find('h2', 0)->plaintext;
		$address = $html->find('div[class="info"]',0)->plaintext;

		$cinema = $this->get_cinema();
		
		foreach($html->find('.movie') as $movie) {
			$filme = new Movie();

			$filme->name = $movie->find('.name a',0)->plaintext;
			$filme->subtitle = 'Legendado';
			/*
				TODO esse loop tem q levar em consideracao filmes com ou sem link de horarios... BUG critico
			*/
			foreach($movie->find('.times a') as $showtime) {
				$filme->set_showtime($showtime->plaintext);
			}	

			$cinema->set_movie($filme);
		}

		$html->clear();
		unset($html);

		return $cinema;

	}	
}

?>