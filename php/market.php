<html>
<head>
<title></title>


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
 
<Form name ="form2" Method ="POST" Action ="insertproduct.php">

<table  height="80px" width="350px"    align="center" border="0" bgcolor="#F0F0F0">
<tr>
<td colspan="3">
<div id="header" style="background-color:grey;width:650px" align="center">
<h1 align="center"><font color="white" size="5" face="Comic Sans MS" >Enter the Details of the Product: </font></h1></div>
</td></tr>

<tr>
<td colspan="2" align="right"><font color="grey" size="5" face="Comic Sans MS" > Market ID : </td>
<td align="left">
<INPUT TYPE = "TEXT"  Name ="marketingsiteid">
</td>
</tr>

<tr>
<td colspan="2" align="right"><font color="grey" size="5" face="Comic Sans MS" > Product ID : </td>
<td align="left">
<INPUT TYPE = "TEXT"  Name ="productid">
</td>
</tr>

<tr>
<td colspan="2" align="right"><font color="grey" size="5" face="Comic Sans MS" > Product Name : </td>
<td align="left">
<INPUT TYPE = "TEXT"  Name ="prodName">
</td>
</tr>

<tr>
<td colspan="3" align="center">
<INPUT TYPE="Submit" Name = "Submit1" VALUE = "Submit">
</td>
</tr>

</FORM>

</body>
</html>