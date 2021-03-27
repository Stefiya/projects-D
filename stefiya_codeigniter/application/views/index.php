<!DOCTYPE html>
<html>
<head>
<title> student management system</title>
<link rel="stylesheet" href="css/style.css">
<style>
.bi{
	
	background-image:url("../img/sms.png");
	background-size:cover;
	}
	
.menubar{
	background-color:violet;
	text-align:center;
}
		
.menubar ul{
	list-style:none;
	display:inline-flex;
	}
	
.menubar ul li a{
	color:white;
	text-decoration:none;
}
		
.submenu{
	display:none;
	}

.menubar li{
	padding:15px;
	}
	
.menubar ul li:hover{
	background-color:blue;
	border-radius:10px;
	}
	
.menubar ul li:hover .submenu{
	display:block;
	position:absolute;
	background-color:pink;
	margin-top:15px;
	margin-left:-15px;
	border-radius:15px;
	padding:10px;
	}
	
.menubar ul li:hover .submenu ul{
	display:block;
	margin-left:-30px;
	}
	
.menubar ul li:hover .submenu ul li{
	padding:20px;
	border-bottom:1px solid red;
	}
	h1{
		font-size:35
		px;
	}


</style>
</head>
<body class="bi" > 

<nav class="menubar">

<ul>

	<li><a href="<?php echo base_url();?>/Main/indexview">Home</a></li>
	
	<li><a href="#">Register</a>
		<div class="submenu">
			<ul>
				<li><a href="<?php echo base_url();?>/Main/reg">Student</a></li>
				<li><a href="<?php echo base_url();?>/Main/treg">Teacher</a></li>
			</ul>
		</div>
	
	
	</li>
	<li><a href="<?php echo base_url();?>/Main/logview">Login</a></li> 
	
</ul>
</nav>
<h1><i>STUDENT MANAGEMENT SYSTEM</i></h1>

</body>
</html>