<html>
<head>
<title></title>
</head>
<style>
table,th,tr,td{
	
	border:2px solid;
	border-collapse:collapse;}
</style>
<body>
<table>

<?php
$link = mysqli_connect("localhost", "root", "", "old");
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $sql = "UPDATE old1 SET emailid='geeethue@mail.com' WHERE id=4";
if(mysqli_query($link, $sql)){
	
    echo "updated successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>
</table>
</body>
</html>