<?php
$link=mysqli_connect("localhost","root","","insert_view");
if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$id=$_POST['id'];
$email=$_POST['email'];
$sql=("update view set fname='$fname',lname='$lname',email='$email' where id=$id");
if(mysqli_query($link,$sql))
{
echo "value updated";
header("location:view.php");

}
else
{
echo "error$sql".mysqli_error($link);
}
mysqli_close($link);

?>
