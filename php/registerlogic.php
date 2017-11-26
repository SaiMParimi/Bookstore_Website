<?php

mysql_connect("localhost", "root", "phpadmin") or die(mysql_error()); 

 mysql_select_db("project") or die(mysql_error()); 
$x=rand(9011,9090);

$firstName= $_POST['firstName'];
$lastName= $_POST['lastName'];
$address= $_POST['address'];
$email= $_POST['eid'];
$username= $_POST['username'];
$password= $_POST['pass'];
$advertisedBy= $_POST['advertisedBy'];
 
 
 
$sql="INSERT INTO emp_login_details (empId,firstName,lastName,address,email,username,password,advertisedBy)
VALUES
('$x','$firstName','$lastName','$address','$email','$username','$password','$advertisedBy')";

mysql_query($sql) or die ('Error insert query failed');



header("Location: thankRegister.php");
 
?>