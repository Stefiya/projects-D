<?php
$link=mysqli_connect("localhost","root","","old");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$sql="INSERT INTO old2(firstname,lastname,emailid)
		VALUES ('$firstname','$lastname','$emailid')";
		
if(mysqli_query($link,$sql))
{
echo"table inserted";
}
else{
	echo "error$sql".mysqli_error($link);
}
mysqli_close($link);
?>