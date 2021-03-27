<!DOCTYPE html>
<html>
<style>
th,td,table{
border:1px solid;
border-collapse:collapse;
}
</style>
<body>

<?php
$link=mysqli_connect("localhost","root","","old");
if($link===false)
{
die("error: could not connect".mysqli_connect_error());

}
$sql="select * from old1 order by firstname";
if($result=mysqli_query($link,$sql))
{
if(mysqli_num_rows($result)>0)
{
echo "<table>
<tr>
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>emailid</th>
</tr>
<tr>";
while($row=mysqli_fetch_array($result))
{
echo
"<tr>
<td>".$row['id']."</td>
<td>".$row['firstname']."</td>
<td>".$row['lastname']."</td>
<td>".$row['emailid']."</td>
</tr>";
}
echo "</table>";
}
else
{
echo "No records found";

}
}
$sql="DELETE from old1 WHERE firstname='achu'";
if(mysqli_query($link,$sql))
{
echo "records deleted";
}
else
{
echo "oops!".mysqli_error($link);
}
mysqli_close($link);
?>
</body>
</html>

