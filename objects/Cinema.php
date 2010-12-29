<?php 
class Cinema {  
	public $id;
	public $name;  
	public $address;
	public $phone;
	public $lat;
	public $long;
	public $state;
	public $state_code;
	public $city;
	public $site;
	public $ticket;
	public $details;  
	public $url;  

	public $movies = array(); 

	function set_movie($movie) {
		$this->movies[] = $movie;
	}
}
?>