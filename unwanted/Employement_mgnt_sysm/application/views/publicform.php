
<html>
<head>
<title> first site                              
</title>
<style>
    .bi{
    background-image:url("../images/img7.jpg");
    background-size:cover;
    
}
input ,textarea{
     padding:10px;
margin:10px;
text-align:center;
}
.frm
{
    border:1px solid;
  
   width:500px;
   padding:20px;
   margin-left:400px;
   background-color:rgba(0,0,0,0.4);
   
}
h1{
    text-align:center;
    color:white;
}
table
{
margin-left:100px;
color:white;
}

</style>
</head>
<body class="bi">
   <div class="menubar">

<form method="post" action="<?php echo base_url() ?>Main/frm">

<div class="frm">
<table>
<h1>REGISTRATION FORM</h1>
           <tr><td> Firstame:</td><td><input type="text" name="fname" placeholder="firstname"></td></tr> </br>
           <tr><td> Lastname:</td><td><input type="text" name="lname" placeholder="lastname"></td></tr> </br>
           <tr><td> Address:</td><td><textarea placeholder="address" name="address"></textarea></td></tr> </br>
           <tr><td> pincode:</td><td><input type="text" name="pin" placeholder="pin"></td></tr> </br>
           <tr><td> phonenumber:</td><td><input type="text" name="phoneno" placeholder="phonenumber"></td></tr> </br>
           <tr><td> gender:</td><td><input type="radio" name="gender" id=m value="male">
            <label for="m">male</labe>
            <input type="radio" name="gender" id=f value="female">
            <label for="f">female</labe></br>
            <tr><td>  email:</td><td><input type="email" name="email" placeholder="email"></td></tr> </br>
            <tr><td> password:</td><td><input type="password" name="password" placeholder="password"></br>
            <tr><td>confirm password:</td><td><input type="password" name="confirmpassword" placeholder="password"></br>
            <tr><td> </td><td><input type="submit" value="Register"></td></tr>
</table>
</div>
 </form>

 
</div>
</body>
</html>