<?php	

	function authent($cons_key, $cons_sec){
    //echo "auth hit";
	//$authent = false;		
		$sql = "SELECT cons_key FROM users WHERE cons_key='".$cons_key."' AND cons_sec='".$cons_sec."' LIMIT 1";
		if ($stmt = query($sql)) {
     		if (!$stmt) {
					die("Query failed to execute for some reason");
			}

                 $num_rows = $stmt->num_rows;
				//ensure we have a result
				if($num_rows == 0 && $authent = true){
					die("Forbidden: Credentials Refused!");
				}
		}
	}	
?>
