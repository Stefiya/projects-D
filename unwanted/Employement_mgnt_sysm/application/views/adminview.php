<html>
<head>
<title></title>
<style>
    table,th,td{
        border:1px solid;
        border-collapse:collapse;
        padding:15px;
        background-color:rgba(0,0,0,0.10);
        
    }
    body{
    
    width:470px;
    height:500px;
	text-align:center;
	padding:5px;
	margin-left:400px;
    
}
.bi{
	background-image:url(../images/42.jpg);
	background-size:cover;
	
  }

 </style>
</head>
<body class="bi">
    <h1>Notification view<h1>

<table>
<div>
<tr>
<thead>
<th>StaffName</th>
<th>Phoneno</th>
<th>Notification</th>
<th>Currentdate</th>
</thead>
</tr>
<?php
if($n->num_rows()>0)
{
    foreach($n->result() as $row)
    {  
        ?>
        
     <tr>
         
        <td><?php echo $row->name;?></td>
        <td><?php echo $row->address; ?> </td>
        <td><?php echo $row->notification; ?> </td>
        <td><?php echo $row->currentdate; ?></td>
        </tr>
        </div>
        <?php
    }
}
    ?>
</table>
</body>
</html>