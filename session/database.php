<?php
$link=mysqli_connect("localhost","root","","session");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
?>