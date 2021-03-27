<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
    table,thead,th,td{
        border:1px solid;
        border-collapse:collapse;
        padding:20px;
        margin-left:200px;
    }
    h1{
        text-align:center;
    }
    .bi{
    background-image:url("../images/41.jpg");
    background-size:cover;
    }
 </style>
</head>
<body class="bi">
    <h1> VIEW PUBLIC DETAILS</h1>
        <form method="POST" action="<?php echo base_url()?>Main/approvedetails">
<?php
if(isset($user_data))
{
    foreach($user_data->result() as $row1)
    {
        ?>
        <table>
            <tr>
                <td>Firstname:</td>
                <td><input type="text name="fname" value="<?php echo $row1->fname;?>"></td>
            </tr>
            <tr>
                <td>lastname:</td>
                <td><input type="text name="lname" value="<?php echo $row1->lname;?>"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text name="address" value="<?php echo $row1->address;?>"></td>
            </tr>
            <tr>
                <td>Pincode:</td>
                <td><input type="text name="pincode" value="<?php echo $row1->pincode;?>"></td>
            </tr>
            <tr>
                <td>Phoneno:</td>
                <td><input type="text name="phoneno" value="<?php echo $row1->phno;?>"></td>
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
<th>Firstname</th>
<th>Lastname</th>
<th>Address</th>
<th>Pincode</th>
<th>Phoneno</th>
<th>Gender</th>
<th>Email</th>
<th colspan="2">Action</th>
</tr>
<?php
if($n->num_rows()>0)
{
  

    foreach($n->result() as $row)
    {  
        ?>
        
     <tr>
         
        <td><?php echo $row->fname;?></td>
        <td><?php echo $row->lname;?> </td>
        
        <td><?php echo $row->address;?></td>
        <td><?php echo $row->pincode; ?> </td>
        <td><?php echo $row->phno; ?> </td>
        <td><?php echo $row->gender; ?> </td>
        <td><?php echo $row->email; ?></td>
         
         
         
         <?php
         if($row->status==1)
         {
             ?>
             <td>Approved</td>
             <td><a href="<?php echo base_url()?>Main/rejectdetails/<?php echo $row->fkey;?> ">Reject</a></td>
             <?php
             }
             elseif($row->status==2)
             {
                 ?>
                 <td>Rejected</td>
                 <td><a href="<?php echo base_url()?>Main/approvedetails/<?php echo $row->fkey;?>">Approve</a></td>
                 <?php
             }
             else{
                 ?>
         <td><a href="<?php echo base_url()?>Main/approvedetails/<?php echo $row->fkey;?>">Approve</a></td>
         <td><a href="<?php echo base_url()?>Main/rejectdetails/<?php echo $row->fkey;?> ">Reject</a></td>
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