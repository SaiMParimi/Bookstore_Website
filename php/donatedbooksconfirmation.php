<html>
<body>


<?php
session_start();
mysql_connect("localhost", "root", "phpadmin") or die(mysql_error()); 

 mysql_select_db("project") or die(mysql_error()); 
 $employeee = $_SESSION['eid'];
 
 echo"Thank you for your donation";
 echo"<br>";
echo "You have donated the following books"; 
$data = mysql_query("SELECT bookname from donatedbooks")
 or die(mysql_error());


 
 
 
echo "<table border='1'>
<tr>
<th>Books</th>
</tr>";

while($row = mysql_fetch_array($data))
{
echo "<tr>";
echo "<td>" . $row['bookname'] . "</td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html>