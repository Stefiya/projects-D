<!DOCTYPE html>
<html>
<head>
<title>teachers site</title>
  <style>
  .bi{
	
	background-image:url("../img/register2.jpg");
	background-size:cover;
    
	}
div{
background-color:lightblue;
width:600px;
height:auto;
text-align:center;
padding:5px;
margin-left:350px;
border:2px solid;
margin-top:60px;
}
    form,input{
        
        padding:5px;
        margin:5px;
    }
  </style>
</head>
<body class="bi">
    <div>
    <form method="post" action="<?php echo base_url()?>Main/reg4">
        <h1>Teachers Registration Form</h1>
         Name:<input type="text" name="name" placeholder="Enter Name"></br>  
        Address:<textarea  type="text" name="address" placeholder="Enter Address"></textarea></br>
        District:
        <input list="district" name="district" placeholder="select District"></br>
            <datalist id="district">
            <option value="Kottayam">
            <option value="Trivandrum">
            <option value="Kollam">
            <option value="Alappuzha">
            </datalist></br>
        Pincode:<input type="text" name="pincode" placeholder="Enter Pincode"></br>
        Phone:<input  type="text" name="phone" placeholder="Enter Phonenumber"></br>
       
        Gender:<input  type="radio" name="gender" value="female">female
        <input  type="radio" name="gender" value="male">male</br>
        Age:<input  type="text" name="age" placeholder="Enter age"></br>
        Subject:<input  list="subject" name="subject" placeholder="select subject"></br>
            <datalist id="subject">
            <option value="english">
            <option value="computer">
            <option value="economics">
            <option value="science">
            </datalist>
        Mail:<input  type="email" name="email" placeholder="Enter Email"></br>
       Password:<input type="password" name="password" placeholder="Enter Password"></br>
        <input class= "sub" type="submit" value="Register">
    </form>
    </div>
        
</body>
</html>
