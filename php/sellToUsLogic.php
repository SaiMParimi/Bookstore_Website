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
			<h1><a href="#">Thank For Selling Request, we will contact you as soon as posssible. </a></h1>
			
		</div>
</div>
<?php


$firstName = (isset($_POST['firstName']) ? $_POST['firstName'] : null);
$lastName = (isset($_POST['lastName']) ? $_POST['lastName'] : null);
$address= (isset($_POST['address']) ? $_POST['address'] : null);
$emailid = (isset($_POST['emailid']) ? $_POST['emailid'] : null);
$phone = (isset($_POST['phone']) ? $_POST['phone'] : null);
$bookName= (isset($_POST['bookName']) ? $_POST['bookName'] : null);
$author = (isset($_POST['author']) ? $_POST['author'] : null);
$price = (isset($_POST['price']) ? $_POST['price'] : null);


//=-----------------------------------------change from here------------------------------
$soap_client = new SoapClient("http://localhost:8022/sellbook/services/sellPort?wsdl");
$params = array("arg0"=>$firstName,"arg1"=>$lastName ,"arg2"=>$address,"arg3"=>$emailid,"arg4"=>$phone,"arg5"=>$bookName,"arg6"=>$author,"arg7"=>$price);
$result = $soap_client -> createProduct($params);

?>

