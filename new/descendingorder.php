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
$link=mysqli_connect("localhost","root","","old");

if($link===false)
{
die("error:could not connect".mysqli_connect_error());
}
$sql="SELECT * FROM old1 ORDER BY firstname DESC";
if($result=mysqli_query($link,$sql));

{	
if(mysqli_num_rows($result) > 0)
{
echo "<table>";
echo "<tr>";
                echo "<th>id</th>";
                echo "<th>firstname</th>";
                echo "<th>lastname</th>";
				echo "<th>emailid</th>";
               
         echo "</tr>";

while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo  "<td>". $row['emailid'] . "</td>";
            echo "</tr>";

        }
        echo "</table>";
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