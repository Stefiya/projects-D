<?php
$link=mysqli_connect("localhost","root","","new");
if($link===false)
{
die("error:could not connect".mysqli_error());
}
$name=$_post['name'];
$email=$_post['email'];
$password=$_post['password'];
$sql="INSERT INTO details((name,email,password) VALUES($name,$email,$password))";

if(mysqli_query($link,$sql))
{
echo"TABLE INSERTED";
header(location:"select.php")
}
else
{
echo"$sql.error" .mysqli_error($link);
}
mysqli_close($link)
?>
