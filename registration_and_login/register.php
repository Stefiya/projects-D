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
<form action="insert.php" method="POST">
<h1>Registration form</h1>
 name:<input type="text" name="name" ></br></br>
 address:<input type="text" name="address"></br></br>
 phone:<input type="text" name="phone"></br>
 email:<input type="email" name="email"></br>
 password:<input type="password" name="password"></br>
 <input type="submit" value="register">
 
</form>
</body>
</html>