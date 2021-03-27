<html>
<head>
<title></title>
<style>
body{
    background-image:url("../images/emp_bg4.jpg");
    background-size:cover;
    }
table,td{
    border:2px solid;
    border-collapse:collapse;
    padding:10px;
    text-align:center;
    margin-left:200px;
    margin-top:50px;
    
    
}
.tb{
    background-color:rgba(0,0,0,0.4);
    color:white;

}
h2{
    text-align:center;
}

</style>
</head>
<body>

<table class="tb">

    <h2>STAFF TABLE</h2>
    <tr>
    <td>Staff Id</td>
    <td>Name</td>
    <td>Address</td>
    <td>Office ID</td>
    <td>Pincode</td>
    <td>District</td>
    <td>Gender</td>
    <td>DOB</td>
    <td>Contact</td>
    <td>Designation</td>
    <td colspan="2">Action</td>
    <!--<td>password</td>-->
    </tr>
    <?php
    if($n->num_rows()>0)
      {
        foreach($n->result() as $row)
        {
         ?>
         <tr>
         <td><?php echo $row->staffid;?></td>
         <td><?php echo $row->name;?></td>
         <td><?php echo $row->address;?></td>
         <td><?php echo $row->officeid;?></td>
         <td><?php echo $row->pincode;?></td>
         <td><?php echo $row->district;?></td>
         <td><?php echo $row->gender;?></td>
         <td><?php echo $row->dob;?></td>
         <td><?php echo $row->contact;?></td>
         <td><?php echo $row->designation;?></td>
         
         <?php
         if($row->status==1)
         {
             ?>
             <td>Approved</td>
             <td><a href="<?php echo base_url()?>Main/staff_reject/<?php echo $row->lid;?>" >Reject</a></td>
             <?php
         }
         elseif($row->status==2)
         {
             ?>
             <td>Rejected</td>
             <td><a href="<?php echo base_url()?>Main/staff_approve/<?php echo $row->lid;?>" >Approve</a></td>
             <?php
         }
         else{
             ?>
            <td><a href="<?php echo base_url()?>Main/staff_approve/<?php echo $row->lid;?>" >Approve</a></td>
            <td><a href="<?php echo base_url()?>Main/staff_reject/<?php echo $row->lid;?>" >Reject</a></td>
            </tr>
            <?php
            }
        }
    }
      else
      {
          ?>
          <tr><td>no data found</td>
          </tr>

         <?php
      }
      ?>

</table>
</form>
</body>
</html>