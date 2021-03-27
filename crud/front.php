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
<h1>TABLE</h1>
<a href="insert_form.php">insert new user</a>
<table>
<thead>

<tr>
 <th>action</th>
  <th>User ID</th>
  <th>User Name</th>
  <th>User Password</th>
  <th>User Status</th>
 </tr>
</thead>
<tbody>
<?php
$mysql=new mysqli("localhost","root","","ddu");
$query=$mysql->query("select * from ddu_gky");

  foreach($query as $value=>$row)
{

echo  "<tr>
		     
		<td><a href='delete.php?id=".$row['user_id']."'>delete</a>/
		<a href='updateform.php?id=".$row['user_id']."'>update</a></td>
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

