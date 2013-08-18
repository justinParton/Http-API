<?php
//DB Parameters
   
	function query($request){
	global $link;
   
	$authent = false;	
  $db_host = "SQL ADDRESS"; 
	$db_user = "USER";
	$db_password = "PASSWORD"; 
	$db_name = "DB_NAME";
  	
    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	   $returned = mysqli_query($link,$request) or die("Database query error:".mysql_error());
	   return $returned;
	}
	
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
