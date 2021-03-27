<!DOCTYPE html>
<html>
<head>
<title>form site</title>
  <style>
  .bi{
	
	background-image:url("../img/register1.jpg");
	background-size:cover;
    
	}
    div{
background-color:pink;
width:600px;
height:auto;
text-align:center;
margin-left:300px;
border:2px solid;
margin-top:60px;

}
    input,textarea{
        padding:10px;
        margin:10px;
        margin-left:50px;
        }
    h1{
        text-decoration:underline;
        text-align:center;
    }
   
  </style>
</head>
<body class="bi">
    <div>
    <form method="post" action="<?php echo base_url()?>Main/reg1">
        <h1>Student Registration Form</h1>
        Student First Name: <input  type="text" name="fname" placeholder="Enter First Name"></br>  
        Student Last Name: <input  type="text" name="lname" placeholder="Enter Last Name"></br>    
        Student Address: <textarea type="text" name="address" placeholder="Enter Address"></textarea></br>
        District:<input list="district" name="district" placeholder="Enter District"></br>
            <datalist id="district">
            <option value="Kottayam">
            <option value="Trivandrum">
            <option value="Kollam">
            <option value="Alappuzha">
            </datalist></br>
       Pincode: <input  type="text" name="pincode" placeholder="Enter Pincode"></br>
        Phone:<input  type="text" name="phone" placeholder="Enter Phonenumber"></br>
        DOB:<input  type="date" name="dob" placeholder="Enter Date Of Birth"></br>
        Gender:
        <input  type="radio" name="gender" value="female">female
        <input  type="radio" name="gender" value="male">male</br>
        Educational Qualification:
        <input list="education" name="education" placeholder="Enter Qualification"></br>
            <datalist id="education">
            <option value="MCA">
            <option value="MBA">
            <option value="B.Tech">
            <option value="EEE">
            </datalist>
       Mail:<input type="email" name="email" placeholder="Enter Email"></br>
        Password:<input type="password" name="password" placeholder="Enter Password"></br>
        
        <input type="submit" value="Submit">
    </form>
    </div>
        
</body>
</html>
