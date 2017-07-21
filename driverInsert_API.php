<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root123", "develop_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$driver_name = mysqli_real_escape_string($link, $_REQUEST['driver_name']);
 $driver_mob = mysqli_real_escape_string($link, $_REQUEST['driver_mob']);

$driver_location = mysqli_real_escape_string($link, $_REQUEST['driver_location']);

// attempt insert query execution
$sql = "INSERT INTO driver_master (driver_name,driver_mob, driver_location) VALUES ('$driver_name','$driver_mob', '$driver_location')";
if(mysqli_query($link, $sql)){
    echo "Driver Details Added successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link)
?>