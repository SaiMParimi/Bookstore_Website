<!DOCTYPE html>
<html>
<head>
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

 
<Form name ="form100" Method ="POST" Action ="talklogic2.php">

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

<tr align="center" ><td bgcolor="grey"><font  color="white" size="5" face="Comic Sans MS">Rate Us on a Scale of 5: <input type="number" name="quantity" min="1" max="5"></td></tr>

<tr><td align="top"><h1  style="margin-left:20px;margin-bottom:20px;"><p align="center">

<input type="button" value="submit" align="top"> <input type="reset" value="reset"></h1></p></td></tr>
</table>

<table align="center" border="0" height="50" width="900" cellpadding="10px" >


<tr>
<td colspan="2" align="left"><p><font color="white"  size="5" face="Comic Sans MS">
Half Price Books Customer Care
</font></p></td>

<td colspan="2" align="left"><p><font color="white"  size="5" face="Comic Sans MS">
Gift Card Customer Service
 </font></p> </td>

<td colspan="2" align="left"><p><font color="white"  size="5" face="Comic Sans MS">
Corporate Headquarters
</font></p>
</td>
</tr>



<tr>

<td colspan="2" align="left"><p><font color="white"  size="3" face="Comic Sans MS">
Engineers' Archive Books Customer Care
customercare@eabooks.com
800.883.2114 <br>
Mon - Fri 9 am - 5 pm CST<br>
Be sure to check out our Help section </font></p></td>

<td colspan="2" align="left"><p><font color="white"  size="3" face="Comic Sans MS">
Gift Card Customer Service
giftcards@eabooks.com
866.615.2665 (BOOK)<br>
Mon - Fri 9 am - 4:30 pm CST </font></p> </td>

<td colspan="2" align="left"><p><font color="white"  size="3" face="Comic Sans MS">
Corporate Headquarters
EA Books, Records, Magazines Inc.
5893 East Northwest Highway<br>
Dallas, TX 75231</font></p>
</td>
</tr>





</table>


<div id="head" style="background-color:grey;">
</div>

</td>
</tr>

</table>

</div>



</form>
</body>
</html>