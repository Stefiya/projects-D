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
  .menubar{
	 /*background-color:rgba(255,100,10,.9);*/
	 background-color:black;
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
<body class="bi">

<form action="<?php echo base_url()?>Main/loginview" method="post">
<nav class="menubar">
		<ul>
			<li><a href="<?php echo base_url()?>Main/home">Home</a></li>		
			<li><a href="<?php echo base_url()?>Main/home">Logout</a></li>
		</ul>
	</nav>
 <h1>Login form</h1>
 <div>
Email:<input class="in" type="email" name="email"></br></br>
password:<input type="password" name="password"></br></br>
<input class="btn" type=submit value="login">
</div>
</body>
</html>