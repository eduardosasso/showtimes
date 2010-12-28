<?php
include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class Geocode {
	private $geo_json;
	private $location;
	
	private $city;
	private $state = array();
	private $country = array();	
	
	function __construct($address) {
		try {
			$this->geo_json = $this->get($address);
			
			$this->location = $this->geo_json->geometry->location;

			$this->find_country_state_city();			
		} catch (Exception $e) {
			Log::write($e->getMessage() . " - " . $address);
		}
	}
	
	public function address(){
		if ($this->geo_json) {
			return $this->geo_json->formatted_address;
		} else {
			return;
		}		
	}
	
	public function lat() {
		if ($this->location) {
			$json = $this->location->lat;
			return $json;
		} else {
			return;
		}
	}
	
	public function long() {
		if ($this->location) {
			$json = $this->location->lng;
			return $json;
		} else {
			return;
		}
	}
	
	public function country(){
		if ($this->country) {
			return $this->country;
		} else {
			return;
		}		
	}	
	
	public function state(){
		if ($this->state) {
			return $this->state;
		} else {
			return;
		}
	}
	
	public function city() {
		if ($this->city) {
			return $this->city;
		} else {
			return;
		}
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
		
		$data = json_decode($buffer);
		
		if ($data->status != 'OK') {
			throw new Exception($data->status);
		} else {
			return $data->results[0];			
		}
		
	}
	
	private function find_country_state_city(){
		$json = $this->geo_json;
		
		foreach ($json->address_components as $key => $value) {
			$country = array('country', 'political');
			$state = array('administrative_area_level_1', 'political');
			$city = array('locality', 'political');

 			if ($value->types == $country) {
 				$this->country = array("name" => $value->long_name, 'short' => $value->short_name);
 			}
			
			if ($value->types == $state) {
				$this->state = array("name" => $value->long_name, 'short' => $value->short_name);
			}
			
			if ($value->types == $city) {
				$this->city = $value->long_name;
			}			

		}
		
		return $this->city;
	}
	
}

?>