<?php
require_once "Mail.php";
include('Mail/mime.php');

include realpath($_SERVER["DOCUMENT_ROOT"]) . '/classes.php';

class Sendmail
{
	public static function to_admin($subject, $content) {
		$from = "eduardo.sasso@gmail.com";
		$to = "eduardo.sasso@gmail.com";
		
		if (empty($content)) return;
		
		self::send($from, $to, $subject, '<pre>'. print_r($content, true) . '</pre>');
	}

	private static function send($from, $to, $subject, $body) {
		$headers = array ('From' => $from,
										  'To' => $to,
											'Subject' => $subject);

		$crlf = "\n";									
		$mime = new Mail_mime($crlf);

		$mime->setHTMLBody($body);

		// Set body and headers ready for base mail class
		$body = $mime->get();
		$headers = $mime->headers($headers);
			
		$smtp = self::smtp();

		$mail = $smtp->send($to, $headers, $body);

		if (PEAR::isError($mail)) {
			Log::write($mail->getMessage());
		}
	}
	
	private static function smtp() {
		$smtp = Env::smtp();
		
		$factory = Mail::factory('smtp',
			array (	'host' => $smtp->host,
							'port' => $smtp->port,
							'auth' => true,
							'username' => $smtp->username,
							'password' => $smtp->password));
							
		return $factory;				
	}

}

?>