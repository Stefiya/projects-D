<html>
<head>
<title>Home page</title>
</head>
<style>
.bi{
background-image:url("../img/2.jpg");
background-size:cover;

}

.menubar {
background-color:blue;
text-align:center;
}
.submenu{
display:none;
width: 100px;
height: 100px;
}
.menubar ul{
list-style:none;
display:inline-flex;
}
.menubar ul li a{
color:black;
text-decoration:none;
}
.menubar ul li{
padding:10px;
}
.menubar ul li:hover{
background-color:red;
border-radius:10px;
}
.menubar ul li:hover .submenu{
display:block;
position:absolute;
background-color:white;
border-radius:10px;
margin-top:15px;
margin-left:-15px;
padding:10px;

}
.menubar ul li:hover .submenu ul{
display:block;
margin-left:-30px;

}
.menubar ul li:hover .submenu ul li{
padding:10px;
border-bottom:1px solid red;
border-radius:10px;
}
.menubar ul li .submenu ul li
{
background-color:1px solid red;

}



</style>
<body class="bi">

<nav class="menubar">

<ul>
<li><a href="<?php echo base_url()?>Main/home">Home</a></li>
<li><a href="<?php echo base_url()?>Main/staff">Registration</a></li>

<li><a href="<?php echo base_url()?>Main/updates">profile</a></li>
<li><a href="<?php echo base_url()?>Main/sal">Add Salarybill</a></li>

<li><a href="<?php echo base_url()?>Main/homeview">ViewNotification</a></li>
<li><a href="<?php echo base_url()?>Main/loginFormPage">logout</a></li>
</ul>
</nav>
</body>
</html>

