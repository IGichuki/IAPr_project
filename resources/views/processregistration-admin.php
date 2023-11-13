<?php

require("connect.php");
print_r($_POST);
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];
$password=$_POST["password"];
$phoneNumber=$_POST["phoneNumber"];




// print_r($username);
// print_r($dateofBirth);    
// print_r($email);
// print_r($password);
// // print_r($phoneNumber);

$sql="INSERT INTO `users`(`first_name`,`last_name`,`email`,`password`) VALUES('$first_name','$last_name','$email','$password')";

if(mysqli_query($conn,$sql)){
     echo "New record inserted successfuly";
     header('Location:signup');
}
else{ echo "Error: Record not added ".mysqli_error($conn);
}
//mysql1_close($conn);



?>
