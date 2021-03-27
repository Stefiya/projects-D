<?php
$mysql=new mysqli("localhost","root","","form");

$user_name=$_GET['Name'];
$user_Age=$_GET['Age'];
$user_email=$_GET['email'];
$user_password=$_GET['password'];
$user_gender=$_GET['gender'];
$query=$mysql->query("insert into form1(Name,Age,email,password,gender) values('$user_name',
 '$user_Age','$user_email','$user_password','$user_gender')");
 
?>
