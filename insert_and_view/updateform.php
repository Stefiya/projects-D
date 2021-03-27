<?php
$link=mysqli_connect("localhost","root","","insert_view");
if($link===false)
{
die("error:could not connect".mysqli_connect_error());

}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
body{
border:2px solid;
padding:30px;
}
</style>
</head>
<body>


<form action="update.php" method="POST">

<h1>  UPDATE FORM</h1>
<?php
$id=$_GET['id'];
$sql="SELECT * FROM view";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
?>

    First name:</br>
<input type="text" name="fname" value=<?php echo $row['fname'];?>></br></br>
    Last name:</br>
<input type="text" name="lname" value=<?php echo $row['lname'];?>>
</br></br>

   Email:</br>
<input type="email"  name="email" value=<?php echo $row['email'];?>></br></br>
<input type="hidden" name="id" value=<?php echo $row['id'];?>></br>

<input type="submit" value="update"></br>
</table>

</body>
</html>





