<?php
$a=$_REQUEST['name'];
$b=$_REQUEST['gender'];
$c=$_REQUEST['email'];
$d=$_REQUEST['phonenumber'];
$e=$_REQUEST['queries'];
$con=mysql_connect("localhost","root","");
mysql_select_db("hotel");
mysql_query("insert into customerfeedback(name,gender,email,phonenumber,queries) values('$a','$b','$c','$d','$e')");
echo("Your queries submitted successfully");
include("contact.php");
mysql_close($con);
 ?>
