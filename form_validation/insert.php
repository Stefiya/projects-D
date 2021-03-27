<?php
$link=mysqli_connect("localhost","root","","form_validation");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$name=$_POST['name'];
$email=$_POST['email'];
if(!preg_match("/^[a-zA-Z ]*$/",$name))&&(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
$sql="INSERT INTO form(name,email)
		VALUES ('$name','$email')";
	if(mysqli_query($link,$sql))
	{
		header("location:form1.php");
	}
	else
	{
		echo "error$sql".mysqli_error($link);
	}

}

else
{
	header('location:form1.php');
}
mysqli_close($link);
?>
