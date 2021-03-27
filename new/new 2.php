<?php
$link=mysqli_connect("localhost","root","","old");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="INSERT INTO old1(id,firstname,lastname,emailid)
		VALUES (9,'joice','j','joice@gmail.com'),(10,'limi','b','limi@gmail.com')";
if(mysqli_query($link,$sql))
{
echo"table inserted";}
else{
	echo "error$sql".mysqli_error($link);
}
mysqli_close($link);
?>