<?php 
$hostname="localhost";
$username="root";
$password="";
$dbname="smart";

$conn= new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error){
	die("connection_failed:" .$conn->connect_error);
}
?>