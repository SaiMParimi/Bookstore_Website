<html>
<head>
<style type="text/css">

body {background-image:url('b2.jpg');background-repeat:repeat;}
a {text-decoration:none;color:white}
  

a {text-decoration:none;color:white}
a:link {color:yellow;}  
a:visited {color:green;}
a:hover {color:blue;}   
a:active {color:red;} 
</style>
</head>

<body>



<table    align="center" border="0" height="200" width="500" bgcolor="#F0F0F0">

<Form name ="form7" Method ="POST" Action ="registerlogic.php">
<div id="header" style="background-color:grey;margin-left:420;margin-right:420;">
<h1  style="margin-left:100;"><font color="white" size="5" face="Comic Sans MS" >Create a new account </font></h1></div>

<tr>
<td colspan="2" align="right"><font color="grey" size="3" face="Comic Sans MS" >First Name: </font></td>
<td colspan="2" align="left" ><input type="text" name="firstName"  style="margin-top:10px;margin-bottom:0px"; required>
</td></tr>


<tr>
<td colspan="2" align="right"><font color="grey" size="3" face="Comic Sans MS" >Last Name: </font></td>
<td colspan="2" align="left"  ><input type="text" name="lastName" style="margin-top:8px;margin-bottom:8px;" required>
</td></tr>

<tr>
<td colspan="2" align="right"><font color="grey" size="3" face="Comic Sans MS" >Address: </td>
<td colspan="2" align="left"><input type="text" name="address" style="margin-top:8px;margin-bottom:8px;" required>
</td></tr>


<tr cellpadding="10px">
<td colspan="2" align="right" ><font color="grey" size="3" face="Comic Sans MS" >E-mail: </td>
<td colspan="2" align="left" > <input type="email" name="eid" style="margin-top:8px;margin-bottom:8px;" required>
  </td></tr>

<tr>
<td colspan="2" align="right"><font color="grey" size="3" face="Comic Sans MS" >User Id: </td>
<td colspan="2" align="left"><input type="text" name="username" style="margin-top:8px;margin-bottom:8px;" required>
</td></tr>
  
  
<tr>
<td colspan="2" align="right"><font color="grey" size="3" face="Comic Sans MS" >Password: </td>
<td colspan="2" align="left"><input type="password" name="pass" style="margin-top:8px;margin-bottom:8px;" required>
</td></tr>

<tr>
<td colspan="2" align="right"><font color="grey" size="3" face="Comic Sans MS" >How did you Know about EA:<br>(optional)</td>
<td>
<input list="advertised_by" name="advertisedBy">


<datalist id="advertised_by" name="advertisedBy">
  <option value="Web">
  <option value="Friend">
  <option value="Newspaper">
  <option value="Flyer">
  <option value="Email">
</datalist>
</td>
</tr>

<tr><td colspan="3" align="center">
<input type="submit" value="submit" Name ="Submit1"> <input type="reset" value="reset"></td></tr>



</table>






</body>
</html>