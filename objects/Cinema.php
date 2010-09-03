<?php 
class Cinema {  
    public $name;  
    public $address;
	public $city;
    public $phone;  
    public $ticket;
    public $details;  

	public $movies = array(); 
	
	function set_movie($movie) {
		$this->movies[] = $movie;
	}
}
?>