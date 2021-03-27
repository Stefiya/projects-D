<?php
$link=mysqli_connect("localhost","root","","insert_view");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid'];
if(!empty($fname)&&!empty($lname)&&!empty($emailid))
{
$sql="INSERT INTO view(firstname,lastname,emailid)
		VALUES ('$firstname','$lastname','$emailid')";
	if(mysqli_query($link,$sql))
	{
		header("location:view.php");
	}
	else
	{
		echo "error$sql".mysqli_error($link);
	}
}
else
{
	header('location:view.php');
}
mysqli_close($link);
?>