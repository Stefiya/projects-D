<html>
<head>
<title></title>
<style>
    table,th,td{
        border:1px solid;
        border-collapse:collapse;
        padding:15px;
        margin-left:90px;
        background-color:rgba(0,0,0,0.2);
    }
    .bi{
	background-image:url(../images/36.jpg);
	background-size:cover;
	
  }
  h1{
      text-align:center;
      
  }
  body{
    
    width:470px;
    height:500px;
	text-align:center;
	padding:5px;
	margin-left:400px;
    
}

 </style>
</head>
<body class="bi">
<form method="POST" action="<?php echo base_url()?>Main/deletedetail">
    <h1>Notification</h1>

    
<table>

<tr>
<thead>
<th>Complaint</th>
<th>Currentdate</th>
<th>Action</th>
</thead>
</tr>
<?php
if($n->num_rows()>0)
{
    foreach($n->result() as $row)
    {  
        ?>
        
     <tr>
        <td><?php echo $row->complaint;?> </td>
        <td><?php echo $row->currentdate;?></td>
        <td><a href="<?php echo base_url();?>Main/deletedetail/<?php echo $row->id;?>">Delete</a></td>
        </tr>
        </div>
        <?php
    }
}
    ?>
</table>
<a href="<?php echo base_url();?>Main/teachhomes">back to home</a>
</form>
</body>
</html>