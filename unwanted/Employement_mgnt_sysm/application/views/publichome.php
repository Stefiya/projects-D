<!DOCTYPE html>
<html>
<head>
<title>Employeement Management System</title>
<link rel="stylesheet" href="css/style.css">
<style>
.bi{
    background-image:url("../images/pub.jpg");
    background-size:cover;
    
}
  .menubar{
    background-color:pink;
    text-align:center;
}
.menubar ul {
    list-style:none;
    display:inline-flex;
    
}
.menubar ul li{
    padding:15px;
    color:#ff0000;  
}
.menubar ul li a{
    color : white;
    text-decoration:none;
}
.menubar ul li:hover{
    background-color:#ff0000;
    border-radius:10px;
}
.submenu{
    display:none;
}
.menubar ul li:hover .submenu{
    display:block;
    position:absolute;
    background-color:#000000;
    padding:10px;
    margin-top:15px;
    margin-left:-15px;
    margin-right:15px;
    border-radius:10px;
    
}
.menubar ul li:hover .submenu ul{
    display:block;
    margin-left:-30px;
}
.menubar ul li:hover .submenu ul li{
    padding:20px;
    border-bottom:1px solid #ff0000;
}
</style>
</head>
<body class="bi">
   <div class="menubar">
   <ul>
        <li><a href="<?php echo base_url();?>/Main/#">Add certificates</a>
        
                    <div class="submenu">
                            <ul>
                            <li> <a href="b_app">Birth Certificates</a></li>
                            <li><a href="death">death Certificates</a></li>
                            <li><a href="cast">cast Certificates</a></li>
                            </ul>
                            </div>
        </li>
    <li><a href="<?php echo base_url();?>Main/update_reg">update</a></li>
    <li><a href="<?php echo base_url();?>Main/comp">Complaints</a>
        <div class="submenu">
            <ul>
                <li><a href="comp">Add</a></li>
                <li><a href="viewcompl">View</a></li>
            </ul>
        </div>
    </li>
    <li><a href="<?php echo base_url();?>Main/home">Logout</a></li>
   </ul>
   </div>
  
</body>
</html>