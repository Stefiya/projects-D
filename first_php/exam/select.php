<?php
$link=mysqli_connect("localhost","root","","new");
if($link===false)
{
die("error:could not connect".mysqli_error());

$sql="SELECT * FROM details";
if($result=mysqli_query($link,$sql));

{	
if(mysqli_num_rows($result) > 0)
{
echo <table>
echo <tr>
echo <td>.row['name']</td>
echo <td>.row['email']</td>
echo <td>.row['password']</td>
echo <td><a href=edit.php >edit</a></td>
echo </tr>
echo </table>
}
echo"TABLE INSERTEd"
}
else
{
echo"$sql.error" .mysqli_error($link);
}
mysqli_close($link)
?>
<html>
<head>
<style>
</style>
<body>
<form action="edit.php" method="post">
name:<input type="text" name="name"></br>
password:<input type="password" name="name"></br>
email:<input type="email" name="name"></br>
<input type="submit" value="edit">
</form>
</body>
</html>