<?php 
	include_once '../model/db.php';
	
	function send_sms1($name, $number)
	{
		$select = "SELECT * FROM `sms_details`";
		$req = execute_query($select, $conn);
		while ($row = mysqli_fetch_array($req, MYSQLI_ASSOC)) {
			$rows[] = $row;
		}
		foreach ($rows as $key => $value) {}
		/*$sms_user = "EdCloud01";
		$sms_password = "1234567890";
		$sms_senderID = "EdClud";*/
		$sms_user = $value['sms_user'];
		$sms_password = $value['sms_password'];
		$sms_senderID = $value['sms_sender_id'];
		$msg = $name."testing sms";

		$urls='http://alotsolutions.in/API/WebSMS/Http/v1.0a/index.php?username='.$sms_user.'&password='.$sms_password.'&sender='.$sms_senderID.'&to='.$number.'&message='.$msg.'&reqid=1&format={json|text}&route_id=route+id&callback=Any+Callback+URL&unique=0&sendondate=07-10-2017T04:00:59&msgtype=unicode';

		$url = $urls;
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$output = curl_exec($ch);
      	curl_close($ch);
		return true;
	}
 ?>