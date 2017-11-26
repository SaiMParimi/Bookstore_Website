
 <?php 
session_start();
 // Connects to your Database 

 mysql_connect("localhost", "root", "phpadmin") or die(mysql_error()); 

 mysql_select_db("project") or die(mysql_error()); 

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_my_site'])) 

 { 
	
	
 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 
	

	
    
 	 	$check = mysql_query("SELECT * FROM emp_login_details WHERE username = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 

 

 //if the cookie has the wrong password, they are taken to the login page 

 		if ($pass != $info['password']) 

 			{ 			header("Location: login.php"); 

 			} 

 

 //otherwise they are shown the admin area	 

 	else 

 			{ 
			echo "<p align='right'>";
			echo "<a href=logout.php>Logout</a>";
			echo "</p>";
             echo "<center><b> XYZ Company </b> </center>";
			 echo "<br>";
			 echo "<br>";
			 echo "<center>";
			 echo "<table width='600' cellpadding='5' cellspacing='5' border='1'>";
			 echo "<tr><td> <a href=department.php>Department Details</a> </td><td> <a href=EmployeeDetails.php>Employee Details</a></td> <td> <a href=client.php>Client Details</a> </td><td> <a href=ProjectDetails.php>Project Details</a></td><td> <a href=ProductDetails.php>Product Details</a></td> </tr>";
			 echo "</table>";
			 echo "</center>";
			 echo "<br>";
			 echo "<br>";
			  
			 
			 
			 
			 
			 
			 
			
	        
			$employeeid = $_SESSION['eid'];
			$data = mysql_query("SELECT empId ,firstName,lastName,title FROM emp_personal_info where empId=$employeeid")
 or die(mysql_error()); 
  
	$data2 = mysql_query("SELECT zone from manager where empId=$employeeid") 		 
     or die(mysql_error()); 
	 
	 $info = mysql_fetch_array( $data );
 $info2 = mysql_fetch_array( $data2 );
  
 echo "<table border='3'>";
              echo "<tr> <td>Employee Id </td><td>".$info['empId']."</td></tr>";

 			 echo "<tr> <td>First Name </td><td>".$info['firstName']."</td></tr>";
             echo "<tr> <td>Last Name </td><td>".$info['lastName']."</td></tr>";
             echo "<tr> <td>Title </td><td>".$info['title']."</td></tr>";
             echo "<tr> <td>Zone </td><td>".$info2['zone']."</td></tr>";
			 
			 
echo "</table>";
echo "<br>";
echo "<tr> <a href=others.php>Click here to view others</a> </tr>";
  
 //echo "Your Content<p>"; 

// echo "<a href=logout.php>Logout</a>"; 

 			} 

 		} 

 		} 

 else 

 

 //if the cookie does not exist, they are taken to the login screen 

 {			 

 header("Location: login.php"); 

 } 

 ?> 