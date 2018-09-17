<?php 
	function db_connect(){
		$conn = mysqli_connect("localhost", "root", "", "send_sms");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			exit();
		}
		return $conn;
	}

	function execute_query($query, $link){
		if(!empty($link)){
			return mysqli_query($link, $query);
		}else{
			return mysqli_query(db_connect(), $query);
		}
	}
 ?>