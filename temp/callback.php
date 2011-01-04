<?php
	//arquivo temporario/exemplo de client para callback de cinemas...	
	include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';
	
	//Log::write($_REQUEST['cinemas']);	
	$cinemas = base64_decode($_REQUEST['data']);
	
	$cinemas = json_decode($cinemas);
	//$cinemas = $_REQUEST['cinemas'];
	
	Log::write('<pre>'.print_r($cinemas, 1).'</pre>');
	

?>