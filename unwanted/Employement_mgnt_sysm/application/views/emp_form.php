<html>
<head>
<title></title>
<style>
    .bi{
    background-image:url("../images/emp_bg3.jpg");
    background-size:cover;
    }
    input,textarea{
        padding:10px;
        margin:10px;
        text-align:center;
    }
    .ci{
        border:2px solid black;
        padding:15px;
        width:700px;
        height:750px;
        background-color:rgba(0,0,0,0.5);
        color:white;
        margin-left:300px;
        text-align:center;
        font-size:22px;
    }
   
    table{
        color:white;
        margin-left:150px;
    }
</style>
</head>
<body>
<div class="bi">
    <form method="post" action="<?php echo base_url()?>Main/emp_regist">
    <div class="ci">
    <h2 class="head">REGISTRATION FORM</h2>
    <table>
    <tr><td>Office ID:</td><td><input type="text" name="ofid" placeholder="enter office id"><br></td></tr>
    <tr><td>Address:</td><td><textarea name="address" placeholder="Enter address"></textarea><br>  </td></tr>
    <tr><td>Pincode:</td><td><input type="text" name="pincode" placeholder="Enter pincode"><br>  </td></tr>
    <tr><td>District:</td><td><input list="location" name="district" placeholder="--select--"><br>
        <datalist id="location">
        <option value="Thiruvananthapuram">
        <option value="Kollam">
        <option value="Pathanamthitta">
        <option value="Alappuzha">
        <option value="Kottayam">
        <option value="Idukki">
        <option value="Ernakulam">
        <option value="Thrissur">
        <option value="Palakkad">
        <option value="Malappuram">
        <option value="Kozhikode">
        <option value="Wayanad">
        <option value="Kannur">
        <option value="Kasargod">
        </datalist>  </td></tr>
    <tr><td>Thaluk:</td><td><input type="text" name="thaluk" placeholder="Enter thaluk"><br>  </td></tr>
    <tr><td>Phone Number:</td><td><input type="text" name="phoneno" placeholder="Enter phoneno"><br></td></tr>
    <tr><td>Email ID:</td><td><input type="email" name="email" placeholder="Enter email"><br></td></tr>
    <tr><td>Password:</td><td><input type="password" name="password" placeholder="enter password"><br></td></tr>
    <tr><td>Confirm Password:</td><td><input type="password" name="confirm_password" placeholder="confirm password"></br><br></td></tr>
    </table>
    <input  type="submit" value="Register">
    
    </div>
    </form>
</div>
</body>
</html>