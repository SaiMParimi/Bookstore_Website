<?php

session_start();
mysql_connect("localhost", "root", "phpadmin") or die(mysql_error()); 

 mysql_select_db("project") or die(mysql_error()); 
 $employeee = $_SESSION['eid'];
 
 



$sql="INSERT INTO giftcards (custid,giftcardname)
VALUES
('$employeee','$_POST[giftcardname]')";

mysql_query($sql) or die ('Error insert query failed');



header("Location: thankForGC.php");
 
 
 
 
 
 
 
 
 
 
 
 
?>