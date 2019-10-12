<?php
$a=$_REQUEST['name'];
$b=$_REQUEST['address'];
$c=$_REQUEST['foodtype'];
$d=$_REQUEST['foodname'];
$con=mysql_connect("localhost","root","");
mysql_select_db("hotel");
mysql_query("insert into orderform(name,address,foodtype,foodname) values('$a','$b','$c','$d')");
echo("Ordered successfully");
include("order.php");
mysql_close($con);
 ?>
