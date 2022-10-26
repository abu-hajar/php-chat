<?php
 
$conn = mysqli_connect("localhost","root","","voice");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>