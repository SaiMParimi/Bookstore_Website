<?php

session_start();
mysql_connect("localhost", "root", "phpadmin") or die(mysql_error()); 

 mysql_select_db("project") or die(mysql_error()); 
 $employeee = $_SESSION['eid'];
 
 



$sql="INSERT INTO feedback (custid,feedback,rating)
VALUES
('$employeee','$_POST[feed]',$_POST[quantity])";

mysql_query($sql) or die ('Error insert query failed');



//header("Location: thankForGC.php");
 
 
 
 
 
 
 
 
 
 
 
 
?>