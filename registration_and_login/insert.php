<?php
$link=mysqli_connect("localhost","root","","login_register");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO registration(name,address,phone,email,password)
		VALUES ('$name','$address','$phone','$email','$password')";
if(mysqli_query($link,$sql))
{

echo"table inserted";
header("location:login.php");
}
else{
	echo "error$sql".mysqli_error($link);
}
mysqli_close($link);
?>