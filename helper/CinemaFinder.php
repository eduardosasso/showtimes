<?php
class CinemaFinder {
	
	private $_country;
  private $_state;
  private $_city;    
	
	function __construct($country, $state, $cities) {
		$this->_country = $country;
    $this->_state = $state;
    $this->_cities = $cities;
    $this->_cinemas = array();
		$this->_cinemas_tmp = array();
	}	
	
	public function get_all_cinemas() {
		foreach ($this->_cities as $key => $city) {
			$this->get_cinemas_city($this->_state, $city);			
		}
		return $this->_cinemas;
	}

	/*
		TODO esse metodo devia retornar...
	*/
	public function get_cinemas_city($_state, $_city){
		//recupera todos os cinemas de uma determinada cidade no google
		$city = urlencode($_city . ' ' . $_state);
		$url = "http://www.google.com.br/movies?near=$city&num=2000";

		$curl_handle=curl_init();

		curl_setopt($curl_handle,CURLOPT_URL,$url);
		curl_setopt($curl_handle, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; U; FreeBSDi386; en-US; rv:1.2a) Gecko/20021021");
		curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7'));
		curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);  
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);

		$html = str_get_html($buffer);
		$cinemas = array();

		foreach($html->find('#movie_results .theater') as $div) {
			try {
				$h2 = $div->find('h2 a',0);
				
				if (!$h2) {
					//excecao: nome do cinema sem link, tem q ir direto no arquivo e adicionar o tid do google na url
					$h2 = $div->find('h2',0);					
					$h2->href = '';
					Log::write("Arrumar url do cinema " . $h2->innertext . " em " . $_city);
				}
				
				$nome = $h2->innertext;
				$url = "http://google.com.br" . $h2->href;
				$url = html_entity_decode($url);
				
				$endereco = strip_tags($div->find('.info',0)->innertext);
				
				$endereco_formatado = Helper::format_address($endereco)
				$telefone = $endereco_formatado['phone'];
				$endereco = $endereco_formatado['endereco'];

				$cinema = array("nome" => $nome, "endereco" => $endereco, "telefone" => $telefone, "url" => $url);
				
				//so incluir na lista de cinemas se ja não tiver um cinema com esse nome...
				if (!in_array($nome, $this->_cinemas_tmp)) {
					$this->_cinemas_tmp[] = $nome;
					$this->_cinemas[] = $cinema;
				}

			} catch (Exception $e) {
				Log::write($e->getMessage() . " - " . $_city);			
			}
		}

		// clean up memory
		$html->clear();
	}	
}
?>