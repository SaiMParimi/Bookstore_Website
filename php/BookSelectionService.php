<html>
<head>
<style>

body {background-image:url('bottom.jpg');
background-repeat:repeat;
background-size:1370px 1000px;}

a {text-decoration:none;color:white}
  

a {text-decoration:none;color:white}
a:link {color:yellow;}  
a:visited {color:green;}
a:hover {color:blue;}   
a:active {color:red;} 
</style>



<meta charset="UTF-8">
<title>The Bookstore</title>
</head>

<body align="center">
<table border="3"  width="1320" height="100px">
<tr >

<td align="center"  width="1200px"><p><b><font color="#0B0B3B" size="5" face="Comic Sans MS" >Add Your Favourite Book To The Shopping Cart</font></b></p><br>
<form action="BookSelectionLogic.php" method="GET">
 
<table bgcolor="white" border="3">
<ul class="products">
<tr>
<td>	

		<li>
			<a href="#" class="item">
				<img src="dbms.jpg"/>
				<div><font color="black" size="5" face="Comic Sans MS" >
					<p>DBMS</p>
					<p>Price:$60.99</p>
				</div>
			</a>
		</li></td>
		<td>
		 
  
  <input type="submit" name="book1" value="Add To Cart">

		
		</td></tr>
<tr>
<td>	
		<li>
			<a href="#" class="item">
				<img src="se.jpg"/>
				<div><font color="black" size="5" face="Comic Sans MS" >
					<p>SE</p>
					<p>Price:$80.75</p>
				</div>
			</a>
		</li></td>
		<td>
		 
  
  <input type="submit" name="book2" value="Add To Cart">

		
		</td>
		</tr>
<tr>
<td>
		<li>
			<a href="#" class="item">
				<img src="lp.jpg"/>
				<div ><font color="black" size="5" face="Comic Sans MS" >
					<p>LP</p>
					<p>Price:$50.35</p>
				</div>
			</a>
		</li>
		</td>
		<td>
		 
  
  <input type="submit" name="book3" value="Add To Cart">

		
		</td>
		</tr>
	</ul>
	</table>

</td>
</tr>

</div>




</form>

</body>

</html>