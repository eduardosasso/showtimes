<?php 
class Cinema {  
    public $name;  
    public $address;
	public $state;
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