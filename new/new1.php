<?php
$link=mysqli_connect("localhost","root","","old");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="CREATE TABLE old1(id int primary key,firstname varchar(40),lastname varchar(50),emailid varchar(50))";

if(mysqli_query($link,$sql))
{
echo "Table created";
}
else{
	echo "error$sql".mysqli_error($link);
}
mysqli_close($link);
?>