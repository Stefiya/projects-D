<html>
<head>
<title></title>
<h1>Registration</h1>
<style>
.a{
    border:2px solid;
    text-align:center;
}
input{
    padding:20px;
    margin:10px;
}
</style>
</head>
<form action="<?php echo base_url()?>main/show" method="post">
<body class="a">
Name:<input type="text" name="name" ></br>
Address:<textarea type="text" name="address"></textarea></br>
Gender:<input type="radio" name="gender" id="male" value="male">
<label for="male">male</label>
<input type="radio" name="gender" id="female" value="female">
<label for="female">female</label></br>
Age:<input type="text" name="age"></br>
Email:<input type="email" name="email" placeholder="email"></br>
Password:<input type="password" name="password" placeholder="password"></br>
<input type="submit" value="register">

</form>
</body>
</html>