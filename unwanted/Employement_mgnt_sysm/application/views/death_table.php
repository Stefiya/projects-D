<html>
<head>
<title></title>
<style>
body{
    background-image:url("../image/emp_bg4.jpg");
    background-size:cover;
    }
table,td{
    border:2px solid;
    border-collapse:collapse;
    padding:10px;
    text-align:center;
    
    
}
.tb{
    background-color:rgba(0,0,0,0.4);
    color:white;

}
a{
    text-decoration:none;
}

</style>
</head>
<body>
    <nav>
        <button>
        <a href="<?php echo base_url()?>Main/office">Back</a>
        </button>
    </nav>
<table class="tb">

    <h2>Death Certificate</h2>
    <tr>
    <td>Date Of Death</td>
    <td>Name of the Deceased</td>
    <td>Gender</td>
    <td>Address of the Deceased</td>
    <td>Name Of Husband/Father</td>
    <td>Name Of Mother</td>
    <td>Address Of The Deceased At The Time Of Death</td>
    <td>Age Of The Deceased</td>
    <td>Death Place</td>
    <td>Informant's Name</td>
    <td>Informant's Address</td>
    <td>Panchayath</td>
    <td>Informant's Aadhar No</td>
    <td>Phone No</td>
    <td colspan='2'>Action</td>
    <!--<td>password</td>-->
    </tr>
    <?php
    if($n->num_rows()>0)
      {
        foreach($n->result() as $row)
        {
         ?>
         <tr>
         <td><?php echo $row->d_date;?></td>
         <td><?php echo $row->name;?></td>
         <td><?php echo $row->gender;?></td>
         <td><?php echo $row->address;?></td>
         <td><?php echo $row->hf_name;?></td>
         <td><?php echo $row->mother_name;?></td>
         <td><?php echo $row->d_address;?></td>
         <td><?php echo $row->age;?></td>
         <td><?php echo $row->d_place;?></td>
         <td><?php echo $row->i_name;?></td>
         <td><?php echo $row->i_address;?></td>
         <td><?php echo $row->panchayath;?></td>
         <td><?php echo $row->aadharno;?></td>
         <td><?php echo $row->phno;?></td>
         
         
         <?php
         if($row->status==1)
         {
             ?>
             <td>Approved</td>
             <td><a href="<?php echo base_url()?>Main/Death_reject/<?php echo $row->d_id;?>" >Reject</a></td>
             <?php
         }
         elseif($row->status==2)
         {
             ?>
             <td>Rejected</td>
             <td><a href="<?php echo base_url()?>Main/Death_approve/<?php echo $row->d_id;?>" >Approve</a></td>
             <?php
         }
         else{
             ?>
            <td><a href="<?php echo base_url()?>Main/Death_approve/<?php echo $row->d_id;?>" >Approve</a></td>
            <td><a href="<?php echo base_url()?>Main/Death_reject/<?php echo $row->d_id;?>" >Reject</a></td>
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