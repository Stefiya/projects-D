<!DOCTYPE html>
<html>
<head>
<title>staff site</title>
  <style>
  .bi{
    
    background-image:url("../images/5.jpg");
    background-size:cover;
    
    }
div{
background-color:rgba(0,0,0,0.4);
width:450px;
height:auto;
text-align:center;
padding:10px;
margin-left:450px;
border:2px solid;
margin-top:60px;
}
    form,input{
        
        padding:10px;
        margin:10px;
    }
  </style>
</head>
<body class="bi">
    <div>
    <form method="post" action="<?php echo base_url()?>Main/staff_reg">
        <h1>Staff Registration Form</h1>
        Staff id:<input type="text" name="staffid" placeholder="Enter staff id"></br>
        Name:<input type="text" name="name" placeholder="Enter Name"></br>  
        Address:<textarea type="text" name="address" placeholder="Enter Address"></textarea></br>
        Office id:<input list="officeid" name="officeid" placeholder="select office id"></br>
        <datalist id="officeid">
        <option value="34562">
        <option value="56762">
        </datalist></br>
        Pincode:<input type="text" name="pincode" placeholder="Enter Pincode"></br>
        District:<input list="district" name="district" placeholder="select District">
            <datalist id="district">
            <option value="Kottayam">
            <option value="Trivandrum">
            <option value="Kollam">
            <option value="Alappuzha">
            <option value="Pathanamthitta">
            <option value="Ernakulam">
            <option value="Idukki">
            <option value="Thrissur">
            <option value="Malappuram">
            <option value="Palakkad">
            <option value="Kozhikode">
            <option value="Wayanad">
            <option value="Kannur">
            <option value="Kasargod">
            </datalist></br>
        Gender:<input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="male">male</br>
        Dob:<input type="date" name="dob" ></br>
        Contact:<input type="text" name="contact" placeholder="Enter Phone number"></br>
        Designation:<input list="designation" name="designation" placeholder="select designation"></br>
        <datalist id="designation">
            <option value="Account Manager">
            <option value="Office Manager">
            <option value="Accounts Payable Clerk">
            <option value="Administrative Assistant">
            <option value="Data Entry Clerk">
            <option value="Office  Assistant">
            <option value="Office Clerk">
            <option value="Mail Clerk">
            <option value="Receptionist">
            </datalist>
        Email:<input  type="email" name="email" placeholder="Enter Email"></br>
        Password:<input  type="password" name="password" placeholder="Enter password"></br>
      
       
 <input class= "sub" type="submit" value="Register">
    </form>
    </div>
        
</body>
</html>