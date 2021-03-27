<?php
$link=mysqli_connect("localhost","root","","insert_view");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$id=$_GET['id'];
$sql="delete from view where id=$id";
if(mysqli_query($link,$sql))
{
	header("Location:view.php");
}
else
{
echo "oops!".mysqli_error($link);
}
mysqli_close($link);
?>


