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
$link=mysqli_connect("localhost","root","","login_register");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="SELECT * FROM registration";
if($result=mysqli_query($link,$sql));

{	
if(mysqli_num_rows($result) > 0)
{
echo "<table>";
echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
				echo "<th>address</th>";
				echo "<th>phone</th>";
				echo "<th>email</th>";
				echo "<th>password</th>";
               
         echo "</tr>";

while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
				echo "<td>" . $row['phone'] . "</td>";
                echo  "<td>". $row['email'] . "</td>";
				echo  "<td>". $row['password'] . "</td>";
				
                 echo "</tr>";

        }
        echo "</table>login successfully";
 mysqli_free_result($result);
    }
 else{
    echo "ERROR: $sql ." . mysqli_error($link);
}
}
mysqli_close($link);
?>
</table>
</body>
</html>