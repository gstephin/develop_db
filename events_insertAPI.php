<?php
     if($_SERVER['REQUEST_METHOD']=='POST'){
		$link = mysqli_connect("localhost", "root", "root123", "develop_db");
 
			if($link === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
				}
			
			$image	=	file_get_contents($_FILES['image']['tmp_name']);
			$type	=	 pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			if($type != "jpg"){
			echo "Please upload a jpg file";
		}
		else{

			//$image	=	mysql_real_escape_string($image);
			$base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);

}
			$event_location = mysqli_real_escape_string($link, $_REQUEST['event_location']);
			$event_title = mysqli_real_escape_string($link, $_REQUEST['event_title']);
			$event_description = mysqli_real_escape_string($link, $_REQUEST['event_description']);
			$event_date = mysqli_real_escape_string($link, $_REQUEST['event_date']);
			$add_date = date("Y-m-d");
			
			
			$sql = "INSERT INTO events_master (event_location,event_date,event_title, event_description,add_date,event_image) VALUES ('$event_location','$event_date','$event_title', '$event_description','$add_date','$base64')";
			if(mysqli_query($link, $sql)){
				echo "Records added successfully.";
				}else
				{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
 
				mysqli_close($link);
	 }
?>
<html>
<input type="file" name="imageUpload" id="imageUpload">

</html>