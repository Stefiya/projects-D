<?php
$link=mysqli_connect("localhost","root","","new");
if($link===false)
{
die("error:could not connect".mysqli_error());
}
$sql=update details set (name,email,password) where($name,$email,$password);
echo <table>
echo <tr>
echo <td>.row['name']</td>
echo <td>.row['email']</td>
echo <td>.row['password']</td>
echo <td><a href=update.php >edit</a></td>
echo </tr>
echo </table>

name=$_post['name']
email=$_post['email']
password=$_post['password']

if(mysqli_query($link,$sql))
{
echo"update success"
}
else
{
echo"$sql.error" .mysqli_error($link)
}
mysqli_close($link)
?>