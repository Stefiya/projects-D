<?php
$link=mysqli_connect("localhost","root","","old");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="INSERT INTO old2(id,firstname,lastname,emailid)
		VALUES (1,'joice','j','joice@gmail.com'),(2,'limi','b','limi@gmail.com'),(3,'rubi','b','rubii@gmail.com'),
		(4,'rinu','n','rinu@gmail.com')";
if(mysqli_query($link,$sql))
{
echo"table inserted";}
else{
	echo "error$sql".mysqli_error($link);
}
mysqli_close($link);
?>