<?php
     
		$link = mysqli_connect("localhost", "root", "", "develop_db");
 
			if($link === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
				}
			
			
			
			
			$sql = "SELECT event_image FROM events_master where event_description= 'Teststtstststsvdvsddsdss'";
			if(mysqli_query($link, $sql)){
				$result = mysqli_query($link, $sql);

				echo "successfully.";
				
				echo $result;
				}else
				{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
 
				mysqli_close($link);
	
?>
