<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<style>
body{
    text-align:center;
    
    padding:16px;
}
div{
	border:1px  solid black;
    width:300px;
    height:300px;
	text-align:center;
	background-color:rgba(0,0,0,0.4);
	padding:5px;
	margin-left:490px;
    color:white;

}
h1{
	color:white;
    text-decoration:underline;
}
input{
    padding:10px;
    margin:10px;
    background-color:rgba(0,0,0,0.1);
    color:white;
}
.in{
    margin-top:80px;
}
.btn{
    border:1px solid;
    width:100px;
    height:50px;
    border-radius:5px;
    color:white;
}
.bi{
	background-image:url(../images/8.jpg);
	background-size:cover;
	
  }
</style>
<body class="bi">
<form method="post" action="<?php echo base_url()?>Main/loginview">

 <h1>Login form</h1>
 <div>
Email:<input class="in" type="email" name="email"></br></br>
password:<input type="password" name="password"></br></br>
<input class="btn" type=submit value="login">
</div>
</body>
</html>