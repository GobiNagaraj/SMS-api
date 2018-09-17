<?php 
	include_once '../model/db.php';

	function send_mail_user($name, $email)
	{
		$to = $email;
		$sub = 'Hi,' .$name. 'your resume has been successfully received our team. We will get back to you Soon.'
		$message = 'Miss India Registration.';

		$headers = ''."\r\n";
		$send = mail($to, $sub, $message, $headers);

		if($send){
			send_mail_admin($name, $email);
		}
	}

	function send_mail_admin($name, $email)
	{
		$to = 'ngobicse@gmail.com';
		$sub = 'User Registered in Miss South India Website.'
		$message = $name . 'has been Registered...';

		$headers = ''."\r\n";
		$send = mail($to, $sub, $message, $headers);

	}
 ?>