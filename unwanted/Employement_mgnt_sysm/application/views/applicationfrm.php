<html>
<head>
<html>
<head>
<title> first site                              
</title>
<style>
    .bi{
    background-image:url("../images/im.jpg");
    background-size:cover;
    height:200px;
    width:100px;
    
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
<form method="post" action="<?php echo base_url() ?>Main/appl_form">
<table>
<h1>Birth Certificates</h1>
           <tr class="kl"><td> Fullname:</td><td><input type="text" name="fname" placeholder="enter fullname"></td></tr> 
           <tr><td> Date Of Birth:</td><td><input type="date" name="dob" placeholder="selectdate"></td></tr> 
           <tr><td> gender:</td><td><input type="radio" name="gender" id=m value="male">
            <label for="m">male</label>
            <input type="radio" name="gender" id=f value="female">
            <label for="f">female</label></br>
            <tr><td> Place Of Birth:</td><td><input type="text" name="birth" placeholder="please enter place of birth"></td></tr>
            <tr><td> Fullname of husband/father:</td><td><input type="text" name="gaurdian" placeholder="enter name"></td></tr> 
           <tr><td> Permanant Address:</td><td><textarea placeholder="address" name="address"></textarea></td></tr> 
           <tr><td> houseno/room no:</td><td><textarea placeholder="enter number" name="houseno"></textarea></td></tr> 
           <tr><td> Road/street name:</td><td><textarea placeholder="enter road/street name" name="street"></textarea></td></tr> 
           <tr><td> Select district:</td><td><input list="district"placeholder="select district" name="district"></td></tr> 
           <datalist id="district" >
           <option value =" Thiruvananthapuram">
           <option value =" Kollam"> 
           <option value ="Alappuzha">
           <option value ="Pathanamthitta">
           <option value ="Kottayam">
           <option value ="Idukki">
           <option value ="Ernakulam">
           <option value ="Kerala">
           <option value ="Thrissur">
           <option value ="Palakkad">
           <option value ="Malappuram"> 
           <option value ="Kozhikode">
           <option value ="Wayanadu">
           <option value ="Kannur">
           <option value ="Kasaragod">
           </datalist></br>
           <tr><td> Panchayath name:</td><td><textarea placeholder="enter city name" name="panchayath"></textarea></td></tr> </br>
           <tr><td> Ward name and number:</td><td><textarea placeholder="enter Ward name and number" name="ward"></textarea></td></tr>
           <tr><td> Block name:</td><td><textarea placeholder="enter city name" name="block"></textarea></td></tr> 
           <tr><td> Guardian Aadharnumber</td><td><input type="text" name="aadharno" placeholder="enter aadharnumber"></td></tr> 
           <tr><td> pincode:</td><td><input type="text" name="pin" placeholder="pin"></td></tr> 
           <tr><td> phonenumber:</td><td><input type="text" name="phoneno" placeholder="phonenumber"></td></tr> 
            <tr><td> </td><td><input type="submit" value="Register"></td></tr>
</table>
 </form>

 
</div>
</body>
</html>