<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet"  href="style.css">
<style>
.submenu{
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

</style>
<!-- CSS only -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JavaScript Bundle with Popper -->

</head>
<body class="bg-dark" >

<section id="nav-bar" >
<div class="p-3 mb-2 bg-dark text-dark">
<nav class="navbar navbar-expand-lg navbar-light bg-light ">

  <a class="navbar-brand text-dark" href="#">Employment Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#s">Services</a>

      </li>
      <li class="nav-item">
        <a class="nav-link " href="#t">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#c">Registeration</a>
        <div class="submenu">
					<ul>
						<li><a href="<?php echo base_url()?>Main/publ">Public</a></li>
						<li><a href="<?php echo base_url()?>Main/emp_reg">Employement Office</a></li>
                        <li><a href="<?php echo base_url()?>Main/staff">Employement Staff</a></li>
					</ul>
				</div>
			</li>	
      <li class="nav-item">
        <a class="nav-link " href="#c">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>Main/login">login</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</section>
<!-----------banner-section------->
<div class="container" >
    <div class="banner">
      <img src="../images/em1.jpg" height="20%" width="100%">
    </div>
   
</div>
 
</body>
</html>
