
<html>
<head>
<html>
<head>
<title> first site                              
</title>
<style>
    .bi{
    background-image:url("../images/im1.jpg");
    background-size:cover;
    
    
}
input ,textarea{
padding:10px;
margin:10px;
text-align:center;

}
div
{
    border:1px solid;
   width:500px;
   padding:10px;
   margin-left:400px;
   margin-top:100px;
   background-color:rgba(0,0,0,0.4);
   height:auto;
     
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
.kl{
    margin-top:50px;
}

</style>
</head>
<body class="bi">
   <div>
<form method="post" action="<?php echo base_url() ?>Main/death_form">
<table>
<h1>Death Certificates</h1>
           <tr class="kl"><td> Date of Death:</td><td><input type="date" name="date" placeholder="enter Date"></td></tr> 
           <tr><td> Name of the deceased:</td><td><input type="text" name="name" placeholder="Name"></td></tr> 
           <tr><td> gender:</td><td><input type="radio" name="gender" id=m value="male">
            <label for="m">male</label>
            <input type="radio" name="gender" id=f value="female">
            <label for="f">female</label></br>
            <tr><td> Address of the deceased:</td><td><textarea name="address" placeholder="address"></textarea></td></tr>
            <tr><td> Name of husband/father:</td><td><input type="text" name="hfname" placeholder="enter name"></td></tr> 
           <tr><td> Name of mother:</td><td><input type="text" placeholder="mothername" name="mname"></textarea></td></tr> 
           <tr><td> Address of the deceased at the time of death:</td><td><textarea placeholder="addressr" name="daddress"></textarea></td></tr> 
           <tr><td> Age of the deceased:</td><td><input type="text" placeholder="age" name="age"></td></tr> 
           <tr><td>Death place:</td><td><input type="text" placeholder="Death place" name="dplace"></td></tr>  
           <tr><td> Informant's name:</td><td><input type="text" placeholder="enter  name" name="iname"></td></tr> </br>
           <tr><td> Informant's address:</td><td><textarea placeholder="enter address" name="iaddress"></textarea></td></tr>
           <tr><td> panchayath name:</td><td><input type="text" placeholder="enter panchayath name" name="panchayath"></td></tr> 
           <tr><td>Informant's Aadharnumber</td><td><input type="text" name="aadharno" placeholder="enter aadharnumber"></td></tr> 
             <tr><td> Informant's phonenumber:</td><td><input type="text" name="phoneno" placeholder="phonenumber"></td></tr> 
            <tr><td> </td><td><input type="submit" value="submit"></td></tr>
</table>
 </form>

 
</div>
</body>
</html>