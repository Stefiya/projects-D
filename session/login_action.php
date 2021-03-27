<?php
session_start();
$link=mysqli_connect("localhost","root","","session");
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from tb_login where username='$username' and password='$password'";
$res=mysqli_query($link,$sql);
foreach($res as $row)
{
	$id=$row['id'];
}
$_SESSION['loginid']=$id;
header('location:home.php');

?>