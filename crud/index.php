<?php
$mysql=new mysqli("localhost","root","","ddu");
$uname='achu';
$upwd='thanq';
$ustatus=5;
//$query=$mysql->query("insert into ddu_gky(user_name,user_password,user_status) values ('achu','$upwd',$ustatus)");
//$query=$mysql->query("update ddu_gky set user_password='j123',user_status=1 where user_id=1");
//$query=$mysql->query("delete from ddu_gky where user_id=1");
/*if($query)
{
echo "<h2>Login successfully</h2>";
}
else
{
echo "<h2>Login Unsuccessfully</h2>";
}*/
?>
<!DOCTYPE html>
<html>
<head>
<style>
   table,th,td{
  border:1px solid;
  border-collapse:collapse;
  padding:10px;
  text-align:center;
   }
</style>
</head>
<body>
<table>
<thead>
 <tr>
  <th>User ID</th>
  <th>User Name</th>
  <th>User Password</th>
  <th>User Status</th>
 </tr>
</thead>
<tbody>
<?php
$mysql=new mysqli("localhost","root","","ddu");
$result=$mysql->query("select * from ddu_gky");
while( $row=$result->fetch_assoc())
{

echo  "<tr>
       <td>".$row['user_id']."</td>
       <td>".$row['user_name']."</td>
	   <td>".$row['user_password']."</td>
	   <td>".$row['user_status']."</td>
	   </tr>";
}
?>
</tbody>
</table>
</body>
</html>


