<?php

$link=mysqli_connect("localhost","root","","login_register");
if($link===false)
{
die("error:couldnot connect".mysqli_connect_error());
}
$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from registration where email='$email' and password='$password'";
if($result=mysqli_query($link,$sql)){
if(mysqli_num_rows($result)>0)
{
echo "login successfully";
mysqli_free_result($result);
}

else{
echo "login failed! please enter valid email or password";
}
}

mysqli_close($link);
?>

