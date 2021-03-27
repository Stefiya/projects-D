<html>
<head>
<title></title>
<style>
body{
    background-image:url("../images/img3.jpg");
    background-size:cover;
    }
table,td{
    border:2px solid;
    border-collapse:collapse;
    padding:10px;
    text-align:center;
    margin-left:200px;
    margin-top:60px;
    
    
}
.tb{
    background-color:rgba(0,0,0,0.4);
    color:white;

}
h2{
    text-align:center;
    color:white;
}

</style>
</head>
<body>

<table class="tb">

    <h2>EMPLOYEMENT OFFICE DETAILS</h2>
    <tr>
    <td>Office Id</td>
    <td>Address</td>
    <td>Pincode</td>
    <td>District</td>
    <td>Thaluk</td>
    <td>Phone No</td>
    <td>Email</td>
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
         <td><?php echo $row->ofid;?></td>
         <td><?php echo $row->address;?></td>
         <td><?php echo $row->pincode;?></td>
         <td><?php echo $row->district;?></td>
         <td><?php echo $row->thaluk;?></td>
         <td><?php echo $row->phoneno;?></td>
         <td><?php echo $row->email;?></td>
         
         <?php
         if($row->status==1)
         {
             ?>
             <td>Approved</td>
             <td><a href="<?php echo base_url()?>Main/emp_reject/<?php echo $row->empid;?>" >Reject</a></td>
             <?php
         }
         elseif($row->status==2)
         {
             ?>
             <td>Rejected</td>
             <td><a href="<?php echo base_url()?>Main/emp_approve/<?php echo $row->empid;?>" >Approve</a></td>
             <?php
         }
         else{
             ?>
            <td><a href="<?php echo base_url()?>Main/emp_approve/<?php echo $row->empid;?>" >Approve</a></td>
            <td><a href="<?php echo base_url()?>Main/emp_reject/<?php echo $row->empid;?>" >Reject</a></td>
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