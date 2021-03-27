<html>
<head>
<title</title>
<style>
.bi{
	
	background-image:url("../img/notedelt.png");
	background-size:cover;
    margin-left:100px;
    text-align:center;      
    padding:20px;
	}
table,tr,th,td{
    border:2px solid;
    border-collapse:collapse;
    text-align:center;
    margin-left:400px;
    padding:20px;
}
</style>
</head>
<body class="bi">
<h1>Notifications</h1>
<table>
<thead>
<tr>

<th>Notification</th>
<th>currentdate</th>
<th>action</th>
</tr>
</thead>
<?php
if($n->num_rows()>0)
{
  
 foreach($n->result() as $row)
    {  
        ?>
        
     <tr>
         
        
        <td><?php echo $row->notification; ?></td>
        <td><?php echo $row->curnt_date; ?> </td>
        <td><a href="<?php echo base_url()?>Main/deletenotify/<?php echo $row->id;?> ">delete</a></td>
       </tr>
       <?Php
      
    }            
}
?>
</table>
</body>
</html>