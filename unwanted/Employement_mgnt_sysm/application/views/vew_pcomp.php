<html>
<head>
<html>
<head>
<title> first site                              
</title>
<style>
    .bi{
    background-image:url("../images/comp5.jpg");
    background-size:cover;
    
}


.menubar ul {
    list-style:none;
    display:inline-flex;
    
}
.menubar ul li{
    padding:1px;
    color:#ff0000; 
    background-color:violet; 
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

input ,textarea{
     padding:10px;
margin:10px;
text-align:center;
}
.frm
{
    border:1px solid;
     width:500px;
   padding:20px;
   margin-left:400px;
   background-color:rgba(0,0,0,0.6);
   
}
h1{
    text-align:center;
    color:white;
}
table,tr,td,th
{
    border:1px solid;
    border-collapse:collapse;
    padding:2px;
margin-left:100px;
color:white;
}

</style>
</head>
<body class="bi">
    <h1>VIEW COMPLAINTS</h1>
<div class="menubar">
   <ul>
        <li> <a href="<?php echo base_url();?>Main/pblic">Back</a></li>
        </ul>
</div>
<form method="post" action="<?php echo base_url()?>Main/pub_comp">

         <div class="frm">
<table>
<thead>
        <tr>
        <th>complint</th>
        <th>Complaint date</th>
        <th>Action</th>
        </tr>
</thead>
<tbody>
<?php
 if($userdata->num_rows() >0)
 {  
     foreach($userdata->result() as $row1)
    {   
         ?>
        <tr>
        <td><?php echo $row1->complaint; ?></td>
        <td><?php echo $row1->curent_date; ?></td>
        <td><a href="<?php echo base_url() ?>Main/delete_complaint/<?php echo $row1->com_id;?>">Delete</td>
        </tr>
        <?php
    }
}
?> 

 

</div>
</form>
 
</body>
</html>