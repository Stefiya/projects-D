<?php
$mysql=new mysqli("localhost","root","","ddu");
$user_id=$_GET['id'];
$query=$mysql->query("delete from ddu_gky where user_id=$user_id");
header("location:front.php");
?>