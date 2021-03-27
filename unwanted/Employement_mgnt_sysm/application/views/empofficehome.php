<html>
<head>
<title> employee office </title>
<!--   <link rel="stylesheet" href="css/style.css">  -->
<style>
    .bi{
        background-image:url("../images/off2.jpg");
        background-size:cover;
        }
    .menubar{
        background-color:brown;
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
</head>
<body class="bi">
<!--nav start-->
<nav class="menubar">
<ul>
    <li><a href="<?php echo base_url()?>Main/staff_table1">Manage Staffs</a></li>
    <li><a href="#">Manage Application</a>
    <div class="submenu">
            <ul>
                <li><a href="birth_data">Birth</a></li>
                <li><a href="caste_data">Caste</a></li>
                <li><a href="death_data">Death</a></li>
            </ul>
        </div>
    </li>
    <li><a href="">Notification</a>
        <div class="submenu">
            <ul>
                <li><a href="notview">Add</a></li>
                <li><a href="view_not">View</a></li>
            </ul>
        </div>
    </li>
    <li><a href="home">Logout</a></li>
</ul>
</nav>
<!--nav end-->
</body>
</html>
