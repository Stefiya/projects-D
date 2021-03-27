


<?php
	$nameErr=$emailErr=$ErrMsg1=$ErrMsg2="";
	$name=$email="";
	if(isset($_POST['submit']))
		{
		if(empty($_POST['name']))
		{
		$nameErr = "Name is required";
		}
	else
	{
	   $name=$_POST['name'];
		if(!preg_match("/^[a-zA-Z]*$/",$name))
		{
		$ErrMsg1="Only alphabets and whitespaces are allowed!!";
		}
	}
	if(empty($_POST['email']))
	{
	$emailErr = "Email is required";
	}
	else
		{
		$email=$_POST['email'];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
		$ErrMsg2="Invalid email!!";
		}
		}
	}
?>

<html>
<head>
<title>User Registration</title>
    <style>
        .in
        {
            padding:10px;
            margin-left:10px;
            margin-bottom:20px;
            margin-top:20px;

        }
.reg>td>tr
{
border:1px solid;
border-collapse:collapse;
}
.error
{
text-align:right;
color:red;
}
h2
{
text-align:center;
color:#0000ff;
}

    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
<div class="reg">
        <table>
<h2>REGISTRATION</h2>
<tr>
<td><span class="error">*required field</span></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" class="in" name="name" placeholder="Name" value="<?php echo $name; ?>"></td></br>
<td><span class="error">*<?php echo $nameErr;?></span>
<span class="error"><?php echo $ErrMsg1;?></span></td><br><br>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="in" name="email" placeholder="Email" value="<?php echo $email; ?>"></td>
<td><span class="error">*<?php echo $emailErr;?></span>
<span class="error"><?php echo $ErrMsg2; ?></span></td><br><br>
</tr>
<td colspan="2"><input type="submit" name="submit" value="REGISTER"></td>
</tr>
</div>
</table>
</div>
</head>
</body>
</html>
