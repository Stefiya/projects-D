<html>
<head>
<title>Home page</title>
</head>
<style>
.bi{
background-image:url("../images/adm3.jpg");
background-size:cover;

}

.menubar{
        background-color:black;
        text-align:center;
        }
    .menubar ul{
        display:inline-flex;
        list-style:none;
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
        padding:20px;
        border-bottom:1px solid red;
       
    }


</style>
<body class="bi">

<nav class="menubar">

<ul>
<li><a href="<?php echo base_url()?>Main/home">Home</a></li>

<li><a href="#">Manage</a>
        <div class="submenu">
            <ul>
                <li><a href="public">Public</a></li>
                <li><a href="emp_table1">Employee office</a></li>
            </ul>
        </div>
    </li>
<li><a href="<?php echo base_url()?>Main/viewcompl">View Complaint</a></li>
<li><a href="<?php echo base_url()?>Main/view_not">ViewNotification</a></li>
<li><a href="<?php echo base_url()?>Main/viewsal">View Salary bill</a></li>
<li><a href="<?php echo base_url()?>Main/home">logout</a></li>
</ul>

</nav>
</body>
</html>
