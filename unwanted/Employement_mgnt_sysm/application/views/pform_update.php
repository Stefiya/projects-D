<html>
<head>
<html>
<head>
<title> first site                              
</title>
<style>
    .bi{
    background-image:url("../images/new1.jpg");
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
<form method="post" action="<?php echo base_url() ?>Main/">
<?php

 if($userdata->num_rows()>0)
 {
     foreach($userdata->result() as $row1)
    {
         ?>
<div class="frm">
<table>
<h1>UPDATE FORM</h1>
                <tr><td>Firstname:</td><td><input type="text" name="fname" value="<?php echo $row1->fname;?>"></td></tr></br>
                <tr><td>Lastname</td><td>:<input type="text" name="lname" value="<?php echo $row1->lname;?>"></td></tr></br>
                <tr><td>Address:</td><td><input type="text" name="address"value="<?php echo $row1->address;?>"></td></tr></br>          
                <tr><td> pincode:</td><td><input type="text" name="pin" value="<?php echo $row1->pincode;?>"></td></tr></br>
                <tr><td>phonenumber:</td><td><input type="text" name="phoneno" value="<?php echo $row1->phno;?>"></td></tr></br>
                <tr><td>gender:</td><td><input type="text" name="gender" id=m value="<?php echo $row1->gender;?>"></td></tr>
            
                
                <tr><td>email:</td><td><input type="email" name="email" value="<?php echo $row1->email;?>"></td></tr></br>
                <tr><td></td><td><input type="submit"  name="update" value="update"></td></tr>

 <?php
    }
}
?>  </form>
 <div>
</body>
</html>