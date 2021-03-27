<html>
<head>
<title></title>
<style>
    table,th,td{
        border:1px solid white;
        border-collapse:collapse;
        padding:15px;
        margin-left:30px;
        background-color:rgba(0,0,0,0.2);
    }
    .bi{
	background-image:url(../images/comp5.jpg);
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
    color:white;
}

 </style>
</head>
<body class="bi">
<h1>VIEW COMPLAINTS</h1>
<table>

<tr>
<thead>

<th>complaint</th>
<th>subject</th>
<th>current date</th>
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



<td><?php echo $row->complaint;?></td>
<td><?php echo $row->subject;?></td>

<td><?php echo $row->currentdate;?></td>
<td><a href="<?php echo base_url();?>Main/deletedetail/<?php echo $row->id;?>">Delete</a></td>
        </tr>
        </div>
        <?php
    }
}
    ?>
</table>
<a href="<?php echo base_url();?>Main/admin">back to home</a>
</form>
</body>
</html>