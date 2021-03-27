<?php
$mysql=new mysqli("localhost","root","","ddu");
$user_id=$_POST['user_id'];
$user_password=$_POST['user_password'];
$user_name=$_POST['user_name'];
$query=$mysql->query("update ddu_gky set user_name='$user_name',user_password='$user_password' where user_id=$user_id");
header("location:front.php");
?>