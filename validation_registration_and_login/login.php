<?php
 $password_error=$email_er="";
 $password=$email="";
 if(isset($_POST['login']))
 {
	

	 if(empty($_POST['email']))
	 {
		 echo"required email<br>";
		 
	 }
	 else{
		 
	$email= $_POST['email'];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo "invalid email";
	}
	 }
	  if(empty($_POST['password']))
	 {
		 echo"required password<br>";
		 
	 }
	 else{
		 
       $password=$_POST['password'];
	if(!preg_match("/^[a-zA-Z0-9]*$/",$password))
	{
	 echo "atleast contain a capital letter and number<br>";
	}
	 }
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
<body>
<form action="logincheck.php" method="POST">
 <h1>LOGIN</h1>
 email:<input type="text" name="email"value="<?php echo $email; ?>">
 <div><?php echo $email_er; ?></div></br>
 password:<input type="text" name="password"value="<?php echo $password; ?>">
 <div><?php echo $password_error; ?></div></br>
 <input type="submit" value="login">
</form>
</body>
</html>
