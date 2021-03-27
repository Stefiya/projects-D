<html>
<head>
<title></title>
<style>
    table,thead,th,td{
        border:1px solid;
        border-collapse:collapse;
        padding:20px;
    }
    .bi{
	background-image:url(../images/26.jpg);
	background-size:cover;
    }
    h1{
      text-align:center;
  }
 </style>
</head>
<body class="bi">
    <h1>Student details<h1>
        <form method="POST" action="<?php echo base_url()?>Main/approvedetails">
<?php
if(isset($user_data))
{
    foreach($user_data->result() as $row1)
    {
        ?>
        <table>
        <tr>
                <td>First name:</td>
                <td><input type="text" name="first_name" value="<?php echo $row1->first_name;?>"></td>
            </tr>
            <tr>
                <td>Last name:</td>
                <td><input type="text" name="last_name" value="<?php echo $row1->last_name;?>"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" value="<?php echo $row1->address;?>"></td>
            </tr>
            <tr>
                <td>District:</td>
                <td><input type="text" name="location" value="<?php echo $row1->district;?>"></td>
            </tr>
            <tr>
                <td>Pincode:</td>
                <td><input type="text" name="pincode" value="<?php echo $row1->pincode;?>"></td>
            </tr>
            <tr>
                <td>Phoneno:</td>
                <td><input type="text" name="phoneno" value="<?php echo $row1->phoneno;?>"></td>
            </tr>
            <tr>
                <td>Dob:</td>
                <td><input type="text" name="dob" value="<?php echo $row->dob;?>"></td>
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
                <td>Education:</td>
                <td><input type="text" name="education" value="<?php echo $row->education;?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo $row->email;?>"></td>
            </tr>
            <tr>
            <td><input type="hidden" name="id" value="<?php echo $row->id;?>"></td>
            <td><input type="submit" name="update" value="update"></td>
            </tr>
    </table>
    
<?php
    }
}
else{
?>

<table>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Address</th>
<th>District</th>
<th>Pincode</th>
<th>Phoneno</th>
<th>Dob</th>
<th>Gender</th>
<th>Education</th>
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
         
     <td><?php echo $row->first_name;?></td>
        <td><?php echo $row->last_name; ?></td>
        <td><?php echo $row->address; ?></td>
        <td><?php echo $row->district; ?> </td>
        <td><?php echo $row->pincode; ?></td>
        <td><?php echo $row->phoneno; ?></td>
        <td><?php echo $row->dob; ?></td>
        <td><?php echo $row->gender; ?> </td>
        <td><?php echo $row->education; ?></td>
         <td><?php echo $row->email; ?> </td>
         <?php
         if($row->status==1)
         {
             ?>
             <td>Approved</td>
             <td><a href="<?php echo base_url()?>Main/reject/<?php echo $row->loginid;?> ">Reject</a></td>
             <?php
             }
             elseif($row->status==2)
             {
                 ?>
                 <td>Rejected</td>
                 <td><a href="<?php echo base_url()?>Main/approve/<?php echo $row->loginid;?>">Approve</a></td>
                 <?php
             }
             else{
                 ?>
         <td><a href="<?php echo base_url()?>Main/approve/<?php echo $row->loginid;?>">Approve</a></td>
         <td><a href="<?php echo base_url()?>Main/reject/<?php echo $row->loginid;?> ">Reject</a></td>
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