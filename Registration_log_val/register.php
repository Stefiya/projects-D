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
<title>Login and Registeration</title>
  <style>
form{
border:0px solid red;
height:auto;
padding:10px;
margin-left:30%;
}
h1{
text-decoration:underline;
text-align:center;
}
.studl{
font-size:20px;
margin-left:10px;
}
.stud{
 padding :10px;
 margin:10px;
 margin-left:100px;
 
    }
.sub{
border:1px solid;
width:60px;
height:50px;
border-radius:5px;
text-align:center;
margin-left:150px;
margin-top:30px;
font-size:10px;
}
  </style>
</head>
<?php
$nameErr=$addressErr=$phoneErr=$emailErr=$passwordErr="";
if(isset($_POST['submit']))
{
$name=$_POST['name'];

$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pwd=$_POST['password'];

if(empty($name)){
	
$nameErr="name is required";}
else
{
if (!preg_match ("/^[a-zA-z]*$/", $name))
$nameErr="Only alphabets and whitespace are allowed<br>";
}


if(empty($phone))
$phoneErr="phone number is required";
else
{
if (!preg_match ("/^[0-9]*$/", $phone))
$phoneErr="Only numbers are allowed<br>";
}
if(empty($address))
$addressErr="Address is required";
else
{
if (!preg_match ("/^[a-zA-z]*$/", $address))
$addressErr="Only alphabets and whitespace are allowed<br>";
}
if(empty($email))
$emailErr="email is required";
else
{  
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
$emailErr= "Invalid email";
}
if(empty($pwd))
$passwordErr="password is required</br>";

if(empty($nameErr)&&empty($addressErr)&&empty($phoneErr)&&
   empty($emailErr)&&empty($passwordErr))
   {
  $sql="insert into registration(name,address,phone,email,password)
     values('$fname','$address','$phone','$email','$pwd')";
if(mysqli_query($mysql,$sql))
header("Location:login.php");
   }
   }
?>

<body>
    <h1>Registration Form</h1>
<form method="post" action="">

   <label class="studl"> Name:</label></br>
        <input class="stud" type="text" name="name" placeholder="Enter Name">
<span style="color:red"><?php echo $nameErr; ?></span></br>

<label class="studl"> Address:</label></br>
<textarea class="stud" name="address" placeholder="Enter Address"></textarea>
<span style="color:red"><?php echo $addressErr; ?></span></br>
<label class="studl">phone no:</label></br>
        <input class="stud" type="text" name="phone" placeholder="Enter phone number">
<span style="color:red"><?php echo $phoneErr; ?></span></br>
<label class="studl">Email:</label></br>
   <input class="stud" type="text" name="email" placeholder="Enter Mail">
<span style="color:red"><?php echo $emailErr; ?></span></br>
<label class="studl">Password:</label></br>
<input class="stud" type="password" name="password" placeholder="Enter Password">
<span style="color:red"><?php echo $passwordErr; ?></span></br>
<input class= "sub" type="submit"  name="submit" value="Submit">
</form>
</body>
</html>

