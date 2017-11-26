<html>
<head>
<title>A BASIC HTML FORM</title>
<style>
body {background-image:url('b2.jpg');background-repeat:repeat;
}
  
a {text-decoration:none;color:white}
a:link {color:yellow;}  
a:visited {color:orange;}
a:hover {color:blue;}   
a:active {color:red;} 


</style>



</head>
<body>
<?php
  echo '<h1 align="right" ><font color="white" size="5" face="Comic Sans MS" ><a href=logout.php>Logout</a></p>';
?>
  <p align="center"><font color="white" size="5" face="Comic Sans MS" > GIFT CARD  </font></p>


<table border="0" height="220px" width ="850" border="2" align="center">
<tr >
<td ><img id="drag1" src="card1.png" width="336" height="169">
</td>


<td ><img id="drag2" src="card2.png"  width="336" height="169">
</td>


<td ><img id="drag3" src="card3.png" width="336" height="169">
</td>
</tr>
</table>

 
<Form name ="form1" Method ="POST" Action ="newgiftcardslogic.php">

<p align="center"><font color="white" size="5" face="Comic Sans MS" >Select Your Favourite GIFT CARD  </font></p>

<p align="center"><font color="white" size="5" face="Comic Sans MS" >
<select TYPE = "TEXT"  Name ="giftcardname">
  <option value="premium">Premium Gift Card</option>
  <option value="silver">Silver Gift Card</option>
  <option value="gold">Gold Gift Card </option>
</select>


<br>
<p align="center">
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Submit">
<br>
<br>
</FORM>

</body>
</html>