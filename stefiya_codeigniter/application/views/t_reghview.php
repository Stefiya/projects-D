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
    <h1>Teachers registration <h1>
        <form method="POST" action="<?php echo base_url()?>Main/login">
<?php
if(isset($user_data))
{
    foreach($user_data->result() as $row1)
    {
        ?>
        <table>
        <tr>
                
                <td> name:</td>
                <td><input type="text" name="name" value="<?php echo $row1->name;?>"></td>
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
                <td>Gender:</td>
                <td><select name="gender">
                <option><?php echo $row1->gender;?></option>
                <option>Male</option>
                <option>Female</option>
                </select></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age" value="<?php echo $row1->age;?>"></td>
            </tr>
            <tr>
                <td>Subject:</td>
                <td><input type="text" name="subject" value="<?php echo $row1->subject;?>"></td>
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

<th> name</th>
<th>Address</th>
<th>District</th>
<th>Pincode</th>
<th>Phoneno</th>

<th>Gender</th>
<th>Age</th>
<th>Subjectn</th>
<th>Email</th>

</tr>
<?php
if($n->num_rows()>0)
{
  

    foreach($n->result() as $row)
    {  
        ?>
        
     <tr>
         
     
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->address; ?></td>
        <td><?php echo $row->district; ?> </td>
        <td><?php echo $row->pincode; ?></td>
        <td><?php echo $row->phone; ?></td>
        
        <td><?php echo $row->gender; ?> </td>
        <td><?php echo $row->dob; ?></td>
        <td><?php echo $row->subject; ?></td>
         <td><?php echo $row->email; ?> </td>
        
    <?php
    }

}
    else{
        ?>
        <tr><tr>no data found</td></tr>
        <?php
    }

    ?>

</table>
</form>
</body>
</html>
