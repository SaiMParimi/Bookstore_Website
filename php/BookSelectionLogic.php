
<?php

session_start();
mysql_connect("localhost","root","phpadmin") or die(mysql_error());
mysql_select_db("project") or die(mysql_error());

if(isset($_GET['book1']))

{
$bookName = "DBMS";
$employee = $_SESSION['eid'];
//$custid = 123;

$soap_client = new SoapClient("http://localhost:8022/selectbook/services/selectPort?wsdl");
$params =array("arg0"=>$employee,"arg1"=>$bookName);
$result = $soap_client -> createProduct($params);
//echo "success";

}


else if(isset($_GET['book2']))

{
$bookName = "SE";
$employee = $_SESSION['eid'];
//$custid = 124;
$soap_client = new SoapClient("http://localhost:8022/selectbook/services/selectPort?wsdl");
$params =array("arg0"=>$employee,"arg1"=>$bookName);
$result = $soap_client -> createProduct($params);
}



else if(isset($_GET['book3']))

{
$bookName = "LP";
$employee = $_SESSION['eid'];
//$custid=125;
$soap_client = new SoapClient("http://localhost:8022/selectbook/services/selectPort?wsdl");
$params =array("arg0"=>$employee,"arg1"=>$bookName);
$result = $soap_client -> createProduct($params);
}


?>