<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class Geocode {
	private $geo_json;
	
	function __construct($address) {
		$this->geo_json = $this->get($address);
	}
	
	private function get($address){
		$address_encoded = urlencode($address);		
		$url = "http://maps.googleapis.com/maps/api/geocode/json?address=$address_encoded&sensor=false";
		
		$curl_handle=curl_init();

		curl_setopt($curl_handle,CURLOPT_URL, $url);
		curl_setopt ($curl_handle, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; U; FreeBSDi386; en-US; rv:1.2a) Gecko/20021021");
		curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7'));
		curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);  
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);
		
		/*
			TODO testar retorno com erro
		*/
		$data = json_decode($buffer);
		return $data;		
	}
	
	public function lat() {
		return $this->geo_json;
	}
}

?>