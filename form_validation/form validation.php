<html>
<body>
<form action="form validation.php" method="POST">

<h1></h1>
 name:<input type="text" name="name">

 email:<input type="text" name="email">
 <input type="submit" name="submit"></br>
 </body>
 </html>
 
 <?php

 if(isset($_POST['submit']))
 {
	 if(empty($_POST['name']))
	 {
		 echo"required name<br>";
		 
	 }
	 else{
		 
       $name=$_POST['name'];
	if(!preg_match("/^[a-zA-Z]*$/",$name))
	{
	 echo "only contain letters and spaces<br>";
	}
	 }

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
 }	 
 ?>
