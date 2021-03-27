<html>
<head>
<title>Notification
</title>
<style>
    .bi{
    background-image:url("../images/im10.jpg");
    background-size:cover;
    color:green;

    
    
}
.menubar ul {
    list-style:none;
    display:inline-flex;
    
}
.menubar ul li{
    padding:1px;
    color:#ff0000; 
    background-color:#00ff00; 
    text-align:center;
}
.menubar ul li a{
    color : #ffffff;
    text-decoration:none;
}
.menubar ul li:hover{
    background-color:#ff0000;
    border-radius:10px;
}

input { padding:1px;
margin:20;
color:green;

}
form
{
    border:1px solid;
   margin:2px;
   width:500px;
   padding:20px;
   margin-left:400px;
   text-align:center;
    background-color:rgba(0,0,0,0.6);
    color:white;
  
}

h1{
    text-align:center;
}

</style>    
</head>
<body class="bi">

<h1>COMPLAINTS</h1>
    <form method="post"  action="<?php echo base_url() ?>Main/pub_comp">
    <tr><td>Complaints:</td><td><textarea name="complaint" ></textarea></br></tr>
    <input type="submit" value="submit"></br>
     <a href="<?php echo base_url();?>Main/pblic">Back</a>

 </form>
</body>
</html>
