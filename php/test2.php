<html>
<head>
<title>A BASIC HTML FORM</title>
<style type="text/css">

body {background-image:url('b2.jpg');background-repeat:repeat;
}
a {text-decoration:none;color:white}
  

a {text-decoration:none;color:white}
a:link {color:yellow;}  
a:visited {color:green;}
a:hover {color:blue;}   
a:active {color:red;} 
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
$(".chgd").hide();
  $("textarea").keypress(function(){
 
    $(".chgd").css("color","red").slideDown(2000);
  });
});




</script>



</head>
<body>
 
<Form name ="form1" Method ="POST" Action ="testlogic2.php">
<table align="center">
<tr>
<td>

<div id="header" style="background-color:grey;margin-left:295;margin-right:295; width:800px;height:40px;" >
<h1 align="center"  ><font color="white"  size="5" face="Comic Sans MS">Talk to Us </font></h1></div>
</td></tr>
</table>

<table align="center" border="0" height="30" width="750"  bgcolor="#D0D0D0">

<tr height="5">
<td align="center">


<font  color="grey" size="3" face="Comic Sans MS">Give Feedback:</p></font>

<textarea  rows="4" cols="80" maxlength="50" name="feed">
</textarea>

</td>
</tr>

<tr>
<td align="center">
<p class="chgd">
<font  color="blue" size="5" face="Comic Sans MS"> Thank You for Your Feedback</font></p>
</td>
</tr>

<tr align="center" ><td bgcolor="grey"><font  color="white" size="5" face="Comic Sans MS">Rate Us on a Scale of 5: 

<input type="number" name="quantity" min="1" max="5">


<br>




<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Submit">
<br>
<br>
</FORM>

</body>
</html>