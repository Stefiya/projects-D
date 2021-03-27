<!DOCTYPE html>
<html>
<head>
<title> </title>
<style>
input{
padding:10px;
margin:10px;}
</style>
</head>
<body>  
<!--form start-->
<form action="registerform.php">
<h1>Registration form</h1>

<input type="text" name="fname" placeholder="name"></br>
<input type="text" name="age"	 placeholder="age"></br>
<input type="radio" name="gender" id="male">
<label for="male">male</label>
<input type="radio" name="gender" id="female">
<label for="female">female</label></br>
<input type="email" placeholder="email"></br>
<input type="password" placeholder="password"></br>
<input type="submit" value="signup">
</form>
<?php
$mysql=new mysqli("localhost","root","","register");
$query=$mysql->query("select * from form");

  foreach($query as $value=>$row)
{

echo  "<tr>
		     
		 
	     <td>".$row['name']."</td></br>
         <td>".$row['age']."</td></br>
         <td>".$row['gender']."</td></br>
         <td>".$row['email']."</td></br>
		 <td>".row['password']."</td>
         </tr>";
}
?>
<!--form end-->
  </body>
</html>