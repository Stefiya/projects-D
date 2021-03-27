<?php
$link=mysqli_connect("localhost","root","","insert_view");
if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}?>
<html>
<head>
<title></title>
<style>
body,input{
border:2px solid;
padding:10px;
margin:10px;
}
table,th,td{
border:1px solid;
border-collapse:collapse;
}
</style>
<body>
<form action="insert.php">
<?php
$id=$_GET['id'];
$sql = "select * from view where id=$id";
if(mysqli_query($link,$sql))
{
	$result=mysqli_query($link,$sql);
while($row=mysqli_fetch_assoc($result))
{
?>
<h1>View Details</h1>
 first name:<input type="text" name="fname"  value="<?php echo $row['fname'];?>"></br></br>
 last name:<input type="text" name="lname" value="<?php echo $row['lname'];?>"></br></br>
 email:<input type="email" name="email" value="<?php echo $row['email'];?>"></br>
 <input type="submit" value="back to home">
<?php
    
}

}
else
{
echo "oops!".mysqli_error($link);
}
mysqli_close($link);
?>
</form>
</body>
</html>



