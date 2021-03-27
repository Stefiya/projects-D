<html>
<head>
<html>
<head>
<title> first site                              
</title>
<style>
    .bi{
    background-image:url("../images/im2.jpg");
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
<form method="post" action="<?php echo base_url()?>Main/cast_form" enctype='multipart/form-data'>
<table>
<h1>Cast Certificates</h1>
           <tr class="kl"><td>  Name of Person to whom certificate
 is issued:</td><td><input type="text" name="name"></td></tr> 
          <tr><td> Age:</td><td><input type="text"  name="age"></td></tr>
          <tr><td> gender:</td><td><input type="radio" name="gender" id=m value="male">
            <label for="m">male</label>
            <input type="radio" name="gender" id=f value="female">
            <label for="f">female</label></br>
            <tr><td> Name of father:</td><td><input type="text" name="fname" ></td></tr>   
           <tr><td>Post Office with Pin code:</td><td><input type="text" name="pin"></td></tr> 
           <tr><td>Name of Local body:</td><td><input type="text" name="local"></textarea></td></tr>
           <tr><td>  Village:</td><td><input type="text" name="village"></td></tr>
            <tr><td> Taluk:</td><td><input type="text" name="taluk"></td></tr>
           <tr><td> Cast:</td><td><input type="text"  name="cast"></td></tr>
            <tr><td> Religion<td><input type="text"  name="religion"></td></tr> 
            <tr><td> panchayath name:</td><td><input type="text"  name="panchayath"></td></tr> 
           <tr><td> Aadharnumber</td><td><input type="text" name="aadharno" ></td></tr> 
             <tr><td> phonenumber:</td><td><input type="text" name="phoneno" ></td></tr> 
             <tr><td></td><td><input type="file" name="file" ></td></tr> 
            <tr><td> </td><td><input type="submit" value="submit"></tr>
</table>
 </form>

 
</div>
</body>
</html>