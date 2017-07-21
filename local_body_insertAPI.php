<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root123", "develop_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$lb_name = mysqli_real_escape_string($link, $_REQUEST['lb_name']);
 $lb_type = mysqli_real_escape_string($link, $_REQUEST['lb_type']);

$lb_district = mysqli_real_escape_string($link, $_REQUEST['lb_district']);

// attempt insert query execution
$sql = "INSERT INTO local_body (lb_name,lb_type, lb_district) VALUES ('$lb_name','$lb_type', '$lb_district')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link)
?>