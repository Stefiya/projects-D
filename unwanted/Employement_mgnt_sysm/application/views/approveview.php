<html>
<head>
<title></title>
<style>
    table,thead,th,td{
        border:1px solid;
        border-collapse:collapse;
        padding:20px;
    }
 </style>
</head>
<body>
    <h1>Table<h1>
        <form method="POST" action="<?php echo base_url()?>Main/approvedetails">
<?php
if(isset($user_data))
{
    foreach($user_data->result() as $row1)
    {
        ?>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text name="name" value="<?php echo $row1->name;?>"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text name="address" value="<?php echo $row1->address;?>"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><select name="gender">
                <option><?php echo $row1->gender;?></option>
                <option>Male</option>
                <option>Female</option>
                </select></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text name="age" value="<?php echo $row1->age;?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text name="email" value="<?php echo $row1->email;?>"></td>
            </tr>
            <tr>
            <td><input type="hidden" name="id" value="<?php echo $row1->id;?>"></td>
            <td><input type="submit" name="approve" value="approve"></td>
            </tr>
    </table>
    
<?php
    }
}
else{
?>

<table>
<tr>
<th>Name</th>
<th>Address</th>
<th>Gender</th>
<th>Age</th>
<th>Email</th>
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
        <td><?php echo $row->gender; ?> </td>
        <td><?php echo $row->age; ?></td>
         <td><?php echo $row->email; ?> </td>
         <?php
         if($row->status==1)
         {
             ?>
             <td>Approved</td>
             <td><a href="<?php echo base_url()?>Main/rejectdetails/<?php echo $row->id;?> ">Reject</a></td>
             <?php
             }
             elseif($row->status==2)
             {
                 ?>
                 <td>Rejected</td>
                 <td><a href="<?php echo base_url()?>Main/approvedetails/<?php echo $row->id;?>">Approve</a></td>
                 <?php
             }
             else{
                 ?>
         <td><a href="<?php echo base_url()?>Main/approvedetails/<?php echo $row->id;?>">Approve</a></td>
         <td><a href="<?php echo base_url()?>Main/rejectdetails/<?php echo $row->id;?> ">Reject</a></td>
         </tr>
                
                 <?php
             }
             ?>
         
    <?php
    }

}
    else{
        ?>
        <tr><tr>no data found</td></tr>
        <?php
    }
}
    ?>

</table>
</form>
</body>
</html>