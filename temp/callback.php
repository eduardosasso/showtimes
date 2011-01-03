<?php
	include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';
	
	//Log::write($_REQUEST['cinemas']);	
	$cinemas = base64_decode($_REQUEST['cinemas']);
	
	$cinemas = json_decode($cinemas);
	//$cinemas = $_REQUEST['cinemas'];
	
	echo "<pre>";
	print_r($cinemas);
	echo "</pre>";
	
?>