<!DOCTYPE html>
<html>
<head>
<title>work2 </title>
<link rel="stylesheet" href="css/style.css"></link>
<style>
/* nav start */
.bi{
	background-image:url(../images/51.jpg);
	background-size:cover;
	
  }
 .menubar{
	 background-color:rgba(255,100,10,.8);
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
 
 .menubar ul li{
	 padding:15px;
	 
				}
	 
.menubar ul li:hover{
		 background-color:red;
		 border-radius:10px;
					}
.menubar ul li:hover .submenu{
		 display:block;
		 position:absolute;
		 background-color:black;
		 margin-top:15px;
		 margin-left:-15px;
		 border-radius:10px;
		 padding:10px;
							}
.menubar ul li:hover .submenu ul{
		 display:block;
		 margin-left:-30px;
				}
.menubar ul li:hover .submenu ul li{
	padding:10px;
	border-bottom:1px solid red;
}

.row{
	display:flex;
	
	
}			

		
			
.col{
	width:450px;
	background-color:rgba(0,0,0,.4);
	margin:20px;
	height:350px;
	padding:20px;
	color:white;
	text-align:justify;
	
	
}

.row .col h2{
	text-align:center;
	color:white;
	text-decoration:underline;
}

.ft{
	background-color:black;
	padding:20px;
	text-align:center;
	color:white;
	
}
	

</style>
</head>
<body class="bi">

	<nav class="menubar">
		<ul>
			<li><a href="<?php echo base_url()?>Main/home">Home</a></li>
			<li><a href="#">Register</a>
				<div class="submenu">
					<ul>
						<li><a href="<?php echo base_url()?>Main/teach">Teacher</a></li>
						<li><a href="<?php echo base_url()?>Main/regst">Student</a></li>
					</ul>
				</div>
			</li>	
			<li><a href="<?php echo base_url()?>Main/logview">Login</a></li>
		</ul>
	</nav>
	<h1>STUDENT MANAGEMENT SYSTEM</h1>
	</body>
</html>