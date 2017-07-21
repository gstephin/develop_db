<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root123", "develop_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$rep_name = mysqli_real_escape_string($link, $_REQUEST['rep_name']);
$rep_mob_no = mysqli_real_escape_string($link, $_REQUEST['rep_mob_no']);
$rep_ward_name = mysqli_real_escape_string($link, $_REQUEST['rep_ward_name']);
$rep_ward_no = mysqli_real_escape_string($link, $_REQUEST['rep_ward_no']);
$rep_lb_name = mysqli_real_escape_string($link, $_REQUEST['rep_lb_name']);
$lb_type = mysqli_real_escape_string($link, $_REQUEST['lb_type']);


// attempt insert query execution
$sql = "INSERT INTO user_rep (rep_name,rep_mob_no,rep_ward_name,rep_ward_no,rep_lb_name,rep_lb_type) VALUES ('$rep_name','$rep_mob_no', '$rep_ward_name','$rep_ward_no','$rep_lb_name','$lb_type')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link)
?>