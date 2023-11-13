<?php
  

$servername="localhost";
$username="root";
$password="";
$dbname="swiss_collection";


$conn=new mysqli($servername, $username, $password, $dbname);


if(!$conn){
	die("could not connect".mysqli_connect_error());

}
	//echo("connected successfully");



?>