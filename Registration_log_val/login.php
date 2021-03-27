<?php
$mysql=mysqli_connect("localhost","root","","login_register");
if($mysql===false)
{
die("Error.couldnot connect".mysqli_connect_error());
}
?>
 
<!DOCTYPE html>
<html>
<head>
<title>login and register</title>
<style>
body,input{
border:2px solid;
padding:10px;
margin:10px;
}
</style>
</head>
<?php
 $passErr=$emailErr="";

/*pwd=$email="";*/
if(isset($_POST['submit']))
{
/*$email=$_POST['email'];
$pwd=$_POST['password'];*/

if(empty($email))
$emailErr="email is required";
else
{  
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
$emailErr= "Invalid email";
}

if(empty($pwd)){
$passErr="password is required</br>";
/*if(mysqli_query($mysql,$sql))
header("Location:login.php");*/
}
   
}
   
?>

<body>
<form action="logincheck.php" method="POST">
 <h1>LOGIN</h1>
 email:<input type="text" name="email"><div>*<?php echo $emailErr; ?></div></br>
 password:<input type="text" name="password"><div>*<?php echo $passErr; ?></div></br>
 <input type="submit" value="login">
</form>
</body>
</html>
