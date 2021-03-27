<html>
<head>
<title>employment management system</title>
<style>
.bi{
    
    background-image:url("../images/register2.jpg");
    background-size:cover;
    width:400px;
    height:500px;
    text-align:center;      
    padding:20px;
    margin-left:400px;
    margin-top:20px;
    
    }
    div{
        background-color:rgba(0,0,0,0.4);
          
    }

</style>
</head>
<body class="bi">
<div>
  <h1>Updation form </h1>
  <form method="POST" action="<?php echo base_url()?>Main/updation">
    <?php

       if(isset($user_data))
       {
           foreach($user_data->result() as $row1)
           {
             
    ?>
    staffid:<input type="text" name="staffid"  value="<?php echo $row1->staffid; ?>"></br></br>
    name:<input type="text" name="name" value="<?php echo $row1->name;?>"></br></br>
    Address:<textarea  name="address" ><?php echo $row1->address;?></textarea></br></br>
   officeid:<input type="text" name="officeid" value="<?php echo $row1->officeid;?>"></br></br>
   Pincode:<input type="text" name="pincode" value="<?php echo $row1->pincode;?>"></br></br>
    District:<input list="district" name="district" value="<?php echo $row1->district;?>"></br></br>
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
            </datalist>
            Gender:<input type="radio" name="gender" value="male">
                     <label for="male">male</label>
                     <input type="radio" name="gender" value="female">
                     <label for="female">Female</label></br></br>
        Dob:<input type="date" name="dob" value="<?php echo $row1->dob;?>"></br></br>
    contact:<input type="text" name="contact" value="<?php echo $row1->contact;?>"></br></br>
        
    designation:<input list="designation" name="designation" value="<?php echo $row1->designation;?>"></br></br>
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
   Email:<input type="email" name="email" value="<?php echo $row1->email;?>"></br></br>
   <input type="submit" name="update" value="update"></br></br>
    <?php
        }
    }
    ?>
    </form>
    </div>
    </body>
    </html>
