<html>
<body>

<?php
session_start();
mysql_connect("localhost", "root", "phpadmin") or die(mysql_error()); 

 mysql_select_db("project") or die(mysql_error()); 



//echo "id is".$_SESSION['eid'];
$employeee = $_SESSION['eid'];

$data2 = mysql_query("SELECT giftcardname FROM giftcards where custid='$employeee'") 
 or die(mysql_error());
 echo '<h1 align="right" ><font color="white" size="5" face="Comic Sans MS" ><a href=logout.php>Logout</a></p>';
echo '<br><table  height="80px" width="850px"    align="center" border="0" >';


echo '<tr bgcolor="grey"><td colspan="3"><h1 align="center"><font color="white" size="5" face="Comic Sans MS" >Purchased Gift Cards</font></h1></td></tr>';

while($row5 = mysql_fetch_array($data2))
{
echo '<tr><td><h1 align="left"><font color="white" size="5" face="Comic Sans MS" >'. $row5['giftcardname'] .'</font></h1></td>';
}

echo '<tr><td bgcolor="white"><h1 align="left" ><font color="white" size="5" face="Comic Sans MS" ><a href=newgiftcards.php>Buy New Gift Card</a></font></h1></td>';


echo "</table>";
?>

<style type="text/css">

body {background-image:url('b2.jpg');background-repeat:repeat;}
a {text-decoration:none;color:white}
  

a {text-decoration:none;color:white}
a:link {color:yellow;}  
a:visited {color:orange;}
a:hover {color:blue;}   
a:active {color:red;} 
</style>

</body>
</html>