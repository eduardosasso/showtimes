<?php
class CinemaFinder {
	
	private $_country;
  private $_state;
  private $_city;    
	
	function __construct($country, $state, $city) {
		$this->_country = $country;
    $this->_state = $state;
    $this->_city = $city;    
	}	
	
	public function find(){
		//recupera todos os cinemas de uma determinada cidade no google
		$city = rawurlencode($this->_city);
		$url = "http://www.google.com.br/movies?near=$city&num=2000";

		$curl_handle=curl_init();

		curl_setopt($curl_handle,CURLOPT_URL,$url);
		curl_setopt ($curl_handle, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; U; FreeBSDi386; en-US; rv:1.2a) Gecko/20021021");
		curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7'));
		curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);  
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);

		$html = str_get_html($buffer);
		$cinemas = array();
		
		foreach($html->find('#movie_results .theater') as $div) {
			$h2 = $div->find('h2 a',0);
			$nome = $h2->innertext;
			$url = "http://google.com.br" . $h2->href;
			$endereco = strip_tags($div->find('.info',0)->innertext);
			
			$cinema = array("nome" => $nome, "endereco" => $endereco, "url" => $url);
			
			$cinemas[] = $cinema;
		}

		// clean up memory
		$html->clear();
		
	}	
}
?>