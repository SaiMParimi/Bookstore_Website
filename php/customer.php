

 <?php 
// Connects to your Database 
session_start();
 mysql_connect("localhost", "root", "") or die(mysql_error()); 

 mysql_select_db("project") or die(mysql_error()); 


 //Checks if there is a login cookie

 if(isset($_COOKIE['ID_my_site']))


 //if there is, it logs you in and directes you to the members page

 { 
 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site'];

 	 	$check = mysql_query("SELECT * FROM emp_login_details WHERE username = '$username'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check )) 	

 		{

 		if ($pass != $info['password']) 

 			{

 			 			}

 		else

 			{

 			//header("Location: customer.php");



 			}

 		}

 }


 //if the login form is submitted 

 if (isset($_POST['submit'])) { // if form has been submitted



 // makes sure they filled it in

 	if(!$_POST['username'] | !$_POST['pass']) {
                    echo "<script language=javascript>alert('Please enter a valid username and password.')</script>";
 		//die('You did not fill in a required field.');

 	}

 	// checks it against the database



 	

 	$check = mysql_query("SELECT empId,username,password FROM emp_login_details WHERE username = '".$_POST['username']."'")or die(mysql_error());



 //Gives error if user dosen't exist

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {

         
		//  echo "<script language=javascript>alert('Invalid Username or Password.')</script>";
		  //header("Location: members.php");
 		
		
		die('That user does not exist in our database. <a href=login.php>Retry again</a>');

 				}

 while($info = mysql_fetch_array( $check )) 	

 {

 $_POST['pass'] = stripslashes($_POST['pass']);

 	$info['password'] = stripslashes($info['password']);

 	$_POST['pass'] = $_POST['pass'];



 //gives error if the password is wrong

 	if ($_POST['pass'] != $info['password']) {
	echo "<script language=javascript>alert('Invalid Password.')</script>";
 		//die('Incorrect password, please try again.');
         die('<a href=login.php>Retry again</a>');
 	}

else 

 { 

 
 // if login is ok then we add a cookie 

 	 $_POST['username'] = stripslashes($_POST['username']); 

 	 $hour = time() + 3600; 

 setcookie(ID_my_site, $_POST['username'], $hour); 

 setcookie(Key_my_site, $_POST['pass'], $hour);	 
$usernames=$_POST['username'];
 $data1 = mysql_query("SELECT empId FROM emp_login_details where userName='$usernames'") 
 or die(mysql_error());
 
 $row = mysql_fetch_array($data1);
$employeeid=$row['empId'];



$_SESSION['eid'] = $employeeid;
	header("Location: customeraccount.php"); 

 
 
} 

 } 

 } 

 else 

{	 

 }

 // if they are not logged in 

 ?> 
 <html>
<style type="text/css">

body {background-image:url('b2.jpg');background-repeat:repeat;}
a {text-decoration:none;color:white}
  

a {text-decoration:none;color:white}
a:link {color:yellow;}  
a:visited {color:orange;}
a:hover {color:blue;}   
a:active {color:red;} 
</style>
 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("input").keydown(function(){
    $("input").css("background-color","yellow");
  });
  
  
  
  $("input").keyup(function(){
    $("input").css("background-color","white");
  });
});

$(document).ready(function(){

  $("input").keydown(function(){
 $(".chgd2").css("color","red").animate({fontSize:"2em"});
 });
$("input").keyup(function(){
$(".chgd2").hide(2000);
   
    
  });
});

</script>
 
 <script>
function validateForm()
{
var x=document.forms["form21"]["username"].value;
var y=document.forms["form21"]["pass"].value;


if (x==null || x=="" || y==null||y=="")
  {
  alert("Empty fields not allowed");
  return false;
  }
}
</script>

<body>
 
 <form name="form21" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onsubmit="return validateForm()"  > 
<table  height="80px" width="350px"    align="center" border="0" bgcolor="#F0F0F0">
<tr> <td colspan="3">
<div id="header" style="background-color:grey;width:650px" align="center">
<h1 align="center"><font color="white" size="5" face="Comic Sans MS" >Registered users - sign in </font></h1></div>
</td></tr>
<tr>
<td colspan="2" align="right"><font color="grey" size="5" face="Comic Sans MS" > Login:  </td>
<td align="left">



<input type="text" name="username">


</td></tr>

<tr>
<td colspan="2" align="right"><font color="grey" size="5" face="Comic Sans MS" >Password:</font></td>
<td align="left"><input type="password" name="pass" />
</td></tr>
</form>

<tr> <td colspan="3">


</td>
</tr>

<tr> <td colspan="3">
<div id="header" style="background-color:grey;width:650px;height:50px" align="center">
<h1 align="center"><font color="white"><input type="submit" name="submit" value="Login"><input type="reset" value="reset"> </font></h1></div>
</td></tr>

<tr ><td bgcolor="grey" colspan="3" align="center">
<a href="forgot.html" target="_blank" STYLE="TEXT-DECORATION: NONE"><font color="white" size="3" face="Comic Sans MS" >Forgot your password? Click here.</font></a>
<br><br><a href="login.php" target="f6"><font color="white" size="3" face="Comic Sans MS" >New Users Click Here To Register</font></a>
</td></tr>
</table>





</body>
 


 
</html>
