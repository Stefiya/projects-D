<?php
$link=mysqli_connect("localhost","root","","login_register");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="CREATE TABLE registration(id int primary key(auto increment), name varchar(40),address varchar(50), phone int(20), email varchar(50), password varchar(30))";

if(mysqli_query($link,$sql))
{
echo "Table created";
}
else{
	echo "error$sql".mysqli_error($link);
}
mysqli_close($link);
?>