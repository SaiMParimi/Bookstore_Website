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
<h1> </h1>

</div>
</div>
<p align="right">

</p>
<div id="page-wrapper">
<div class="title">
<h2> Your Tranaction History</h2>
</div>
</div>

<?php
function objToArray($obj=false)  {
   if (is_object($obj))
       $obj= get_object_vars($obj);
   if (is_array($obj)) {
       return array_map(__FUNCTION__, $obj);
   } else {
       return $obj;
   }
}
session_start();
mysql_connect("localhost", "root", "phpadmin") or die(mysql_error()); 
mysql_select_db("project") or die(mysql_error()); 


$employeeid = $_SESSION['eid'];

//added code ****************************************************
try
{

$soap_client = new SoapClient("http://localhost:8022/transactions/services/historyPort?wsdl");
$params =array("arg0"=>$employeeid);
$result = $soap_client -> retrievelastname($params);



$res=objToArray($result); 
//$res is group of array
foreach($res as $arr) {
   
   $bookName =$arr[0];
echo "<center><table>";
echo "<tr>";
echo "<tr> <td> <h3> books: </td> <td> <h3>".$bookName." </td></tr>";
echo "</table>";
echo "</br>";
echo "</br>";

}

//printing result


}
catch(SoapFault $exception)
{
echo $exception -> getMessage();
}
?>

</body>
</html>