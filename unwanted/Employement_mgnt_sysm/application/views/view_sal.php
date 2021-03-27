<html>
<head>
<title></title>
<style>
 .bi {
    
    background-image:url("../images/sal1.jpg");
    background-size:cover;
    margin-left:100px;
    text-align:center;      
    padding:20px;
    
    }

table,tr,th,td{
    border:2px solid;
    border-collapse:collapse;
    text-align:center;
    margin-left:490px;
}

</style>
</head>
<body class="bi">
<h1>View salary bill</h1>
<table>
<thead>
<tr>
<th>Name</th>
<th>Designation</th>
<th>bill</th>

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
        <td><?php echo $row->designation;?></td>
        
      <td> <a href="<?php echo base_url('/bill/');
      if($row->file)
       echo $row->file;
       else
       echo "no file";?>" 
       target="_blank">download</a></td>
        
       </tr>
     <?php
    }

}
    ?>

</table>
</body>
</html>