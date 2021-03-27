<html>
<head>
<style>
table,th,td{
        border:1px solid white;
        border-collapse:collapse;
        padding:15px;
        margin-left:70px;
        background-color:rgba(0,0,0,0.6);
    }
    .bi{
	background-image:url(../images/noti2.png);
	background-size:cover;

  }
  h1{
      text-align:center;
      color:black;
      font-size:40px;
      
  }
  body{
    
    width:470px;
    height:500px;
	text-align:center;
	padding:5px;
	margin-left:400px;
    color:white;
    
}
a{
    color:black;
}
</style>
</head>
<body class="bi">
<h1>NOTIFICATION</h1>
<table border="2">
<tr>


<th>Notification</th>
<th>Current date</th>
<th>Action</th>
</tr>
<?php
if($n->num_rows()>0)
{
foreach($n->result() as $row)
{
?>
<tr>


<td><?php echo $row->notification;?></td>

<td><?php echo $row->currentdate;?></td>
<td><a href="<?php echo base_url();?>Main/delete/<?php echo $row->id;?>">Delete</a></td>
        </tr>
        </div>
        <?php
    }
}
    ?>
</table>
<a href="<?php echo base_url();?>Main/office">back to home</a>
</form>
</body>
</html>