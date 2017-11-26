<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="header-wrapper">
		<div id="logo" style="height:105px;">
			<h1><a href="#">MARVEL WORKS</a></h1>
			
		</div>
</div>
<?php
//mysql_connect("localhost", "root", "") or die(mysql_error()); 
echo "<p align='right'>";
			echo "<h3 ALIGN = 'right'><a href=logout.php>LOGOUT</a>";
			echo "</p>";
// mysql_select_db("project") or die(mysql_error()); 

/*$marketingSiteID = $_POST["marketingsiteid"];
$productID = $_POST["productid"];
$productName =$_POST["prodName"];*/
$marketingSiteID = (isset($_POST['marketingsiteid']) ? $_POST['marketingsiteid'] : null);
$productID = (isset($_POST['productid']) ? $_POST['productid'] : null);
$productName= (isset($_POST['prodName']) ? $_POST['prodName'] : null);


$soap_client = new SoapClient("http://localhost:8022/DynamicWeb/services/AdminService?wsdl");
$params = array("arg0"=>$marketingSiteID,"arg1"=>$productID,"arg2"=>$productName);
$result = $soap_client -> createProduct($params);



/*$sql="INSERT INTO marketing_site_product (marketingSiteId, productId, productName)
VALUES
('$_POST[marketingsiteid]','$_POST[productid]','$_POST[productname]')";

mysql_query($sql) or die ('Error insert query failed');

//echo $_POST['clientid'];

//echo "record inserted";

header("Location: ProductDetails.php");*/
?>

