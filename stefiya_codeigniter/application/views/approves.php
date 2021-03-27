<html>
<head>
<title>student management system</title>
<style>
.bi{
	
	background-image:url("../img/approove.jpg");
	background-size:cover;
    text-align:center;
	}

    table,thead,th,td{
        
        border:1px solid;
        border-collapse:collapse;
        padding:20px;
    }
    
 </style>
</head>

<body class="bi">
    <h1>Student Details <h1>
        <form method="POST" action="<?php echo base_url()?>Main/login">
<?php
if(isset($user_data))
{
    foreach($user_data->result() as $row1)
    {
        ?>
        <table>
        <tr>
                <td>First name:</td>
                <td><input type="text" name="fname" value="<?php echo $row1->fname;?>"></td>
            </tr>
            <tr>
                <td>Last name:</td>
                <td><input type="text" name="lname" value="<?php echo $row1->lname;?>"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" value="<?php echo $row1->address;?>"></td>
            </tr>
            <tr>
                <td>District:</td>
                <td><input type="text" name="district" value="<?php echo $row1->district;?>"></td>
            </tr>
            <tr>
                <td>Pincode:</td>
                <td><input type="text" name="pincode" value="<?php echo $row1->pincode;?>"></td>
            </tr>
            <tr>
                <td>Phoneno:</td>
                <td><input type="text" name="phone" value="<?php echo $row1->phone;?>"></td>
            </tr>
            <tr>
                <td>Dob:</td>
                <td><input type="text" name="dob" value="<?php echo $row1->dob;?>"></td>
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
                <td><input type="text" name="education" value="<?php echo $row1->education;?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo $row1->email;?>"></td>
            </tr>
            <tr>
            <td><input type="hidden" name="id" value="<?php echo $row1->id;?>"></td>
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
         
     <td><?php echo $row->fname;?></td>
        <td><?php echo $row->lname; ?></td>
        <td><?php echo $row->address; ?></td>
        <td><?php echo $row->district; ?> </td>
        <td><?php echo $row->pincode; ?></td>
        <td><?php echo $row->phone; ?></td>
        <td><?php echo $row->dob; ?></td>
        <td><?php echo $row->gender; ?> </td>
        <td><?php echo $row->education; ?></td>
         <td><?php echo $row->email; ?> </td>
         <?php
         if($row->status==1)
         {
             ?>
             <td>Approved</td>
             <td><a href="<?php echo base_url()?>Main/reject/<?php echo $row->id;?> ">Reject</a></td>
             <?php
             }
             elseif($row->status==2)
             {
                 ?>
                 <td>Rejected</td>
                 <td><a href="<?php echo base_url()?>Main/approve/<?php echo $row->id;?>">Approve</a></td>
                 <?php
             }
             else{
                 ?>
         <td><a href="<?php echo base_url()?>Main/approve/<?php echo $row->id;?>">Approve</a></td>
         <td><a href="<?php echo base_url()?>Main/reject/<?php echo $row->id;?> ">Reject</a></td>
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
