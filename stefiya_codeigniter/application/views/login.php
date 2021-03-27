<html>
<head>
<title</title>
<style>
.bi{
	
	background-image:url("../img/login.jpg");
	background-size:cover;
	}
div{
background-color:rgba(0,0,0,0.4);
width:400px;
height:auto;
text-align:center;
padding:30px;
margin-left:420px;
border:2px solid black;
margin-top:100px;
color:white;
}

</style>
</head>
<body class="bi">
<div>
<form action="<?php echo base_url()?>Main/login1" method="post">

<h1>login page!</h1>
emailid<input type="email" name="email"><br><br>
password<input type="password" name="password"><br><br>
<input type="submit" value="login">
</div>

</body>
</html>
