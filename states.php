<?php

/* ----------------------------------------
Description: Uri action functions are stored here.
create a function, and setup uri detections to run against. 
One is provided below as an example

Default action is denied access
-----------------------------------------*/
	function upload($url,$name,$uri) {
			switch($uri){
				case '/someUri':
				// Run some command here
					break;
				case '/anotherUri':
			
					break;
				case '/again_another_URi':
				
					break;
				default:
				  
					methodNotAllowedResponse();
				}
				
				if (move_uploaded_file($_FILES['file_contents']['tmp_name'], $uploaddir)) {
					echo "The Selected File has Been Uploaded Succesfully, Thank You! \n";
				} else {
					echo "No Post File Accessible\n";
				}
				$caller = query($query);
				echo $sql;

	}
	
	?>
