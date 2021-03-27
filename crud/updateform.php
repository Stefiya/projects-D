<html>
<head>
</head>
<body>
<form action="update.php" method="post">

<?php
$mysql=new mysqli("localhost","root","","ddu");
$user_id=$_GET['id'];
$result=$mysql->query("select * from ddu_gky where user_id=$user_id");
 $row=$result->fetch_assoc();

    echo "<input type='hidden' name='user_id' value=".$row['user_id'].">";
    echo "Name:<input type='text' name='user_name' value=".$row['user_name'].">
			</br>
		password:<input type='text' name='user_password' value=".$row['user_password'].">";
		

?>
<input type="submit">
</form>
</body>
</html>
 