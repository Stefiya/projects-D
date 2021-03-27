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
<form action="insert.php" method="POST">

<h1></h1>
 first name:<input type="text" name="firstname" ></br></br>
 last name:<input type="text" name="lastname" ></br></br>
 email:<input type="email" name="email"></br>
 <input type="submit" value="submit">

<?php
$link=mysqli_connect("localhost","root","","old");
if($link===false)
{
die("error:could not connect".mysqli_connect_error());

}
$sql = "SELECT * FROM old2";
if($result=mysqli_query($link, $sql))
{
if(mysqli_num_rows($result)>0)
{


echo "<table>";
echo "<tr>";
echo "<th> id</th>";
echo "<th> firstname </th>";
echo "<th> lastname </th>";
echo "<th>emailid</th>";

            echo "</tr>";
while($row=mysqli_fetch_array($result))
{


echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['firstname']."</td>";
echo "<td>".$row['lastname']."</td>";
echo "<td>".$row['emailid']."</td>";

echo "<td><a href='update.php?id=".$row['id']."'>Update</a></td>";

echo "</tr>";
}
echo "</table>";

mysqli_free_result($result);
}
else
{
echo "No records matching your query were found.";

}
 }
mysqli_close($link);

?>
</head>
</body>

</html>

