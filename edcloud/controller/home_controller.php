<?php 
	include_once '../model/db.php';
	include_once 'sms_api.php';
	include_once 'mail.php';

	$conn = db_connect();

	$getIp = $_POST['get_id'];
	$date = $_POST['date'];
	$name = $_POST['name'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$status = "user";
	$sql = "INSERT INTO `user` (`ip_addr`, `doj`, `user_name`, `mobile_number`, `email_id`, `address`, `status`) VALUES ('$getIp', '$date', '$name', '$number', '$email', '$address', '$status')";
	$result = execute_query($sql, $conn);

	if(!$sql)
	{
		//echo "Error",mysqli_error();
		return header('location: ../view/home.php?status=Error');
	}
	else
	{
		send_sms_user($name, $number);
		//send_sms_admin($name, $number);
		return header('location: ../view/home.php?status=Success');
	}
 ?>