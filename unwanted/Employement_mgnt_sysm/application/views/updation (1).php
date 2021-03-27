<html>
<head>
<title>First site </title>
<style>
body{
    
    width:600px;
    height:600px;
    text-align:center;
    padding:20px;
}
input{

	padding:5px;
	margin:5px;
}
h1{
    text-decoration:underline;
}
div{
	border:1px  solid;
    width:470px;
    height:500px;
	text-align:center;
	background-color:rgba(0,0,0,0.4);
	padding:5px;
	margin-left:400px;
}
.bi{
	background-image:url(../images/41.jpg);
	background-size:cover;
	
  }
  
</style>
</head>
<body class="bi">
<form method="post" action="<?php echo base_url()?>Main/updatedetail">
<div>
<h1> UPDATION FORM </h1>
<?php
if(isset($user_data))

{
	foreach($user_data->result() as $row1)
	
    {
		
        ?>
         First name:<input type="text" name="first_name" value="<?php echo $row1->first_name;?>"></br>
		 Last name:<input type="text" name="last_name" value="<?php echo $row1->last_name;?>"></br>
         Address:<input type="text" name="address" value="<?php echo $row1->address;?>"></br>
         District:<input type="text" name="district" value="<?php echo $row1->district;?>"></br>
		 Pincode:<input type="text" name="pincode" value="<?php echo $row1->pincode;?>"></br>
         Phoneno:<input type="text" name="phoneno" value="<?php echo $row1->phoneno;?>"></br>
         Dob:<input type="text" name="dob" value="<?php echo $row1->dob;?>"></br>
		 Gender:<input type="radio" name="gender" id="male">
		<label for="male">male</label>
	    <input type="radio" name="gender" id="female">
		<label for="female">Female</label></br></br>
         Education:<input type="text" name="education" value="<?php echo $row1->education;?>"></br>
         Email:<input type="text" name="email" value="<?php echo $row1->email;?>"></br>
         <input type="submit" name="update" value="update"></br>
         </div>
		 <?php
    }
}

?>

	</form>
	</body>
	</html>
	