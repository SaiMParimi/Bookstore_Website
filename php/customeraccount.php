<html>
<head>
<style type="text/css">

body {background-image:url('b2.jpg');background-repeat:repeat;}
a {text-decoration:none;color:white}
  

a {text-decoration:none;color:white}
a:link {color:yellow;}  
a:visited {color:orange;}
a:hover {color:blue;}   
a:active {color:red;} 
</style>

</head>
<body>

<?php
session_start();
mysql_connect("localhost", "root", "phpadmin") or die(mysql_error()); 

 mysql_select_db("project") or die(mysql_error()); 

$employeee = $_SESSION['eid'];

$data2 = mysql_query("SELECT username FROM emp_login_details where empId='$employeee'") 
 or die(mysql_error());
 
 $row = mysql_fetch_array($data2);
$usernames=$row['username'];
 echo '<h1 align="right" ><font color="white" size="5" face="Comic Sans MS" ><a href=logout.php>Logout</a></p>';
echo '<table  height="80px" width="850px"    align="center" border="0" >';

echo '<tr bgcolor="grey"><td colspan="3"><h1 align="center"><font color="white" size="5" face="Comic Sans MS" > Welcome '.$usernames.'</font></h1></div></td></tr>';
echo '<tr bgcolor="white"><td><h1 align="center"><font color="white" size="5" face="Comic Sans MS" ><a href=giftcards.php>Buy Gift Cards</a></font></h1></div></td>';
echo '<td><h1 align="center"><font color="white" size="5" face="Comic Sans MS" ><a href=donatebooks.php> Donate Books</a></font></h1></div></td>';
echo '<td><h1 align="center"><font color="white" size="5" face="Comic Sans MS" ><a href=BookSelectionService.php>Buy Books</a></font></h1></div></td></tr>';
echo '<td><h1 align="center"><font color="white" size="5" face="Comic Sans MS" ><a href=hist.php>Transaction History</a></font></h1></div></td></tr>';
echo '<td colspan="3" bgcolor="grey"><h1 align="center"><font color="white" size="5" face="Comic Sans MS" >Your Transaction Detials</font></h1></div></td></tr>';



$data3 = mysql_query("SELECT bookname FROM purchasedbooks where custid='$employeee'") 
 or die(mysql_error());
 
 
$data33 = mysql_query("SELECT price FROM purchasedbooks where custid='$employeee'") 
 or die(mysql_error());

 $data4 = mysql_query("SELECT sum(price) as totalprice FROM purchasedbooks where custid='$employeee'") 
 or die(mysql_error());
 
 echo '<table  height="80px" width="850px"    align="center" border="3" >';


echo "<tr>";
echo '<td><h1 align="left"><font color="yellow" size="5" face="Comic Sans MS" > Book Name </font></h1></td>';
echo '<td><h1 align="left"><font color="yellow" size="5" face="Comic Sans MS" > Quantity </font></h1></td>';
echo '<td><h1 align="left"><font color="yellow" size="5" face="Comic Sans MS" > Price </font></h1></td></tr>';

while($row4 = mysql_fetch_array($data3))
{

echo "<tr>";
echo '<td><h1 align="left"><font color="white" size="5" face="Comic Sans MS" >' . $row4['bookname'] . '</font></h1></td>';


}

while($row3 = mysql_fetch_array($data33))
{
echo '<td><h1 align="left"><font color="white" size="5" face="Comic Sans MS" > ';
echo '<td><h1 align="left"><font color="white" size="5" face="Comic Sans MS" >' . $row3['price'] . '</font></h1></td></tr>';

}


while($row5 = mysql_fetch_array($data4)) 
 {
 
 echo '<tr><td><h1 align="left"><font color="white" size="5" face="Comic Sans MS" >Total Cost : ';
 echo '<td><h1 align="left"><font color="white" size="5" face="Comic Sans MS" > ';
 echo '<td><h1 align="left"><font color="white" size="5" face="Comic Sans MS" > '. $row5["totalprice"];
 
 }
 echo "</table>";
 echo "</br>";

?>


</body>
</html>