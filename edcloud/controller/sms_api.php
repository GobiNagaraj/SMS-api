<?php 
	include_once '../model/db.php';
	include_once 'mail.php';

	function send_sms_user($name, $number)
	{
		$select = "SELECT sms_details.sms_user, sms_details.sms_password, sms_details.sms_sender_id, sms_details.authorized, user.user_name, user.mobile_number, user.status FROM `sms_details` JOIN `user` on sms_details.sms_api=user.status";
		$req = execute_query($select, $conn);
		while ($row = mysqli_fetch_array($req, MYSQLI_ASSOC)) {
			$rows[] = $row;
		}
		foreach ($rows as $key => $value) {}
			$link = "http://indiamisssouth.com/events/";
		$sms_user = $value['sms_user'];
		$sms_password = $value['sms_password'];
		$sms_senderID = $value['sms_sender_id'];
		$msg_user = "Dear Participants, your mail has been Registered Successfully. for further Details contact ".$link;
		$msg_admin = "Hi, ".$name." is registered in Miss South India.";
		$textmessage_user = urlencode($msg_user);
		$textmessage_admin = urlencode($msg_admin);

		if($value['status'] == "user"){

		$urls='http://alotsolutions.in/API/WebSMS/Http/v1.0a/index.php?username='.$sms_user.'&password='.$sms_password.'&sender='.$sms_senderID.'&to='.$number.'&message='.$textmessage_user.'&reqid=1&format={json|text}&route_id=route+id&callback=Any+Callback+URL&unique=0&sendondate=07-10-2017T04:00:59&msgtype=unicode';

		$url = $urls;
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$output = curl_exec($ch);
      	curl_close($ch);
      	send_sms_admin($name, $number);
		return true;
		}
	}

	function send_sms_admin($name, $number)
	{
		$sel = "SELECT sms_details.sms_user, sms_details.sms_password, sms_details.sms_sender_id, sms_details.authorized, user.user_name, user.mobile_number, user.status FROM `sms_details` JOIN `user` on sms_details.sms_api=user.status";
		$requ = execute_query($sel, $conn);
		while ($rows = mysqli_fetch_array($requ, MYSQLI_ASSOC)) {
			$rew[] = $rows;
		}
		foreach ($rew as $key => $values) {}
		$sms_user1 = $values['sms_user'];
		$sms_password1 = $values['sms_password'];
		$sms_senderID1 = $values['sms_sender_id'];
		//$msg_user = "Dear Participants, your mail has been Registered Successfully. for further Details contact ".$link;
		$msg_admin1 = "Hi, ".$name." is registered in Miss South India.";
		//$textmessage_user = urlencode($msg_user);
		$textmessage_admin = urlencode($msg_admin1);

		$number1 = "9489965561";
		$number2 = "9894914152";
	
		if($values['authorized'] == "admin"){

		$urls1='http://alotsolutions.in/API/WebSMS/Http/v1.0a/index.php?username='.$sms_user1.'&password='.$sms_password1.'&sender='.$sms_senderID1.'&to='.$number1.','.$number2.'&message='.$textmessage_admin.'&reqid=1&format={json|text}&route_id=route+id&callback=Any+Callback+URL&unique=0&sendondate=07-10-2017T04:00:59&msgtype=unicode';

		$url1 = $urls1;
		$ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_POST, false);
        curl_setopt($ch1, CURLOPT_URL, $url1);
		curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
    	$output1 = curl_exec($ch1);
      	curl_close($ch1);
      	send_mail_user($name, $email);
		return true;
		}
	}
 ?>