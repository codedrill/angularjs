<?php
	
	require_once("config.php");
	
	$data = array();
	$result=mysql_query("select name,phone,state from users");
	while ($row = mysql_fetch_assoc($result)) {
	  
	  $data[]=$row;
	}
		echo json_encode($data);
		die();
?>