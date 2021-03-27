<html>
<head>
<title></title>
<style>
.bi{
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

<h1>complaints</h1>
<table>
<thead>
<tr>
<th>subject</th>
<th>complaint</th>
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
         
        <td><?php echo $row->subject; ?></td>
        <td><?php echo $row->complaint; ?></td>
        <td><?php echo $row->curntdate; ?> </td>
        
       </tr>
     <?php
    }

}
    ?>
</body>
</html>