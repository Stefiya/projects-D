<html>
<head>
<title></title>
<style>
 .bi{
	
	background-image:url("../img/notification.png");
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
}
</style>
</head>
<body class="bi">
<h1>Notifications</h1>
<table>
<thead>
<tr>
<th>Teachers Name</th>
<th>phoneno</th>
<th>Notification</th>
<th>currentdate</th>
</tr>
</thead>
<?php
if($n->num_rows()>0)
{
  
 foreach($n->result() as $row)
    {  
        ?>
        
     <tr>
         
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->phone; ?></td>
        <td><?php echo $row->notification; ?></td>
        <td><?php echo $row->curnt_date; ?> </td>
        
       </tr>
     <?php
    }

}
    ?>

</table>
</body>
</html>