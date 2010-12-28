<?php 
class Cinema {  
	public $id;
	public $name;  
	public $address;
	public $lat;
	public $long;
	public $state;
	public $state_code;
	public $city;
	public $phone;
	public $site;
	public $ticket;
	public $details;  

	public $movies = array(); 

	function set_movie($movie) {
		$this->movies[] = $movie;
	}
}
?>