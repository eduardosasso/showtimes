<?php 
class SuperFeedrTest extends PHPUnit_Framework_TestCase {
	public function testCallback() {
		$raw = 'Tzo2OiJDaW5lbWEiOjc6e3M6NDoibmFtZSI7czoxNjoiQm91cmJvbiBJcGlyYW5nYSI7czo3OiJhZGRyZXNzIjtzOjU6IlJ1YSBYIjtzOjQ6ImNpdHkiO047czo1OiJwaG9uZSI7czozOiIxMjMiO3M6NjoidGlja2V0IjtzOjM6IjQ1NiI7czo3OiJkZXRhaWxzIjtOO3M6NjoibW92aWVzIjthOjA6e319';
		echo base64_decode($raw);		
	}	
}

?>