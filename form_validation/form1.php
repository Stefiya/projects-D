
 <?php
 $name_error=$email_er="";
 $name=$email="";
 if(isset($_POST['submit']))
 {
	 if(empty($_POST['name']))
	 {
	 $name_error = "required name<br>";
		 
	 }
	 else{
		 
       $name = $_POST['name'];
	 
	if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{
	  $name_error="only contain letters and spaces<br>";
	}
	 }

	 if(empty($_POST['email']))
	 {
		 $email_er="required email<br>";
		 
	 }
	 else{
		 
	$email= $_POST['email'];
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$email_er= "invalid email";
	}
	 }
 }
 ?>
 
 <html>
 <body>
<form action="insert.php" method="POST">
 name:<input type="text" name="name" value="<?php echo $name; ?>">
 <div><?php echo $name_error; ?></div>
 email:<input type="text" name="email" value="<?php echo $email; ?>">
 <div><?php echo $email_er; ?></div>
 <input type="submit" name="submit"></br>
 </form>
 </body>
 </html>