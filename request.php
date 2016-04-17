<?php
	
	require_once("config.php");
	$data = json_decode(file_get_contents("php://input"));
	if (isset($data) && !empty($data)) {
		
		$name = mysql_real_escape_string($data->name);
		$phone = mysql_real_escape_string($data->phone);
		$state = mysql_real_escape_string($data->state);
		$query = mysql_query("insert into users(name, phone, state) values ('$name', '$phone','$state')")or ( die(mysql_error()));
		die();
		
	}
?>