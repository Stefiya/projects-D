<html>
<head>
<title></title>
<style>
    table,th,tr,td{
    border:2px solid;
    border-collapse:collapse;
    padding:10px;
    }
</style>
</head>
<body>
    <form method="post" action="<?php echo base_url()?>Main/updatedetails">
    <?php
    if(isset($user_data))
    {
      foreach($user_data->result() as $row1) 
      {
          ?>
          <table>
              <tr>
                  <td>name</td>
                  <td><input type="text" name="name" value="<?php echo $row1->name;?>"></td>
      </tr>
                <tr>
                  <td>address</td>
                  <td><input type="text" name="address" value="<?php echo $row1->address;?>"></td>
      </tr>
      <tr>
            <td>gender</td>
            <td><select name="gender">
            <option><?php echo $row1->gender;?></option>
            <option>Male</option>
            <option>Female</option>
            </select></td>
      </tr>
      <tr>
      <td>age</td>
          <td><input type="text" name="age"  value="<?php echo $row1->age;?>"></td>
      </tr>
      <tr>
      <td>email</td>
          <td><input type="email" name="emailid"  value="<?php echo $row1->email;?>"></td>
     </tr>
     <tr>
     <input type="hidden" name="id" value="<?php echo $row1->id;?>"> 
      <td><input type="submit" name="update" value="update"></td>
      </tr>
      </table>
      <?php
      } 
    }
    else{
        ?>
    
<table>
<thead>
    <tr>
        <th>name</th>
        <th>address</th>
        <th>gender</th>
        <th>age</th>
        <th>emailid</th>
    </tr>
    <?php
    if($n->num_rows()>0)
    {
        foreach($n->result() as $row)
        {
            ?>
            <tr>
                <td><?php echo $row->name;?></td>
                <td><?php echo $row->address;?></td>
                <td><?php echo $row->gender;?></td>
                <td><?php echo $row->age;?></td>
                <td><?php echo $row->email;?></td>
                <td><a href="<?php echo base_url()?>Main/updatedetails/<?php echo $row->id;?>">Edit</a></td>
                <td><a href="<?php echo base_url()?>Main/deletedetails/<?php echo $row->id;?>">Delete</a></td>
        </tr>
        <?php

        }

    }
    else
    {
        ?>
        <tr>
            <td>no data found</td>
    </tr>
    <?php
    }
    }
    ?>
</thead>
</table>
</form>
</body>
</html>
