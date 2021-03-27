<html>
<body>
<form action="validation.php" method="POST">

<h1></h1>
password:<input type="text" name="password">
email:<input type="text" name="email">
 <input type="submit" name="login"></br>
 </body>
 </html>
 
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
