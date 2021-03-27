<html>
<head>
<title>student management system</title>
<style>
.bi{
	
	background-image:url("../img/register2.jpg");
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
  <form method="POST" action="<?php echo base_url()?>Main/update">
    <?php

       if(isset($user_data))
       {
           foreach($user_data->result() as $row1)
           {
             
    ?>
    Firstname:<input type="text" name="fname"  value="<?php echo $row1->fname; ?>"></br></br>
    Lastname:<input type="text" name="lname" value="<?php echo $row1->lname;?>"></br></br>
    Address:<input type="text" name="address" value="<?php echo $row1->address;?>"></br></br>
    District:<input list="district" name="district" value="<?php echo $row1->district;?>"></br></br>
                <datalist id="district">
                <option value="Kottayam">
                <option value="Trivandrum">
                <option value="Kollam">
                <option value="Alappuzha">
                </datalist>
    Pincode:<input type="text" name="pincode" value="<?php echo $row1->pincode;?>"></br></br>
    Phone :<input type="text" name="phone" value="<?php echo $row1->phone;?>"></br></br>
    Dob:<input type="date" name="dob" value="<?php echo $row1->dob;?>"></br></br>
    Gender:<input type="radio" name="gender" id="male">
        <label for="male">male</label>
    <input type="radio" name="gender" id="female">
        <label for="female">Female</label></br></br>
    Education:<input list="education" name="education" value="<?php echo $row1->education;?>"></br></br>
                <datalist id="education">
                <option value="MCA">
                <option value="MBA">
                <option value="B.Tech">
                <option value="EEE">
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

    
