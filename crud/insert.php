<?php
$mysql=new mysqli("localhost","root","","ddu");
$user_name=$_GET['user_name'];
$user_password=$_GET['user_password'];
$query=$mysql->query("insert into ddu_gky(user_name,user_password) values ('$user_name','$user_password')");
header("location:front.php");
?>