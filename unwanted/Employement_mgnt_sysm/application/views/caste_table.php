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

    <h2>Caste Certificate</h2>
    <tr>
    <td>Name Of Person</td>
    <td>Age</td>
    <td>Gender</td>
    <td>Name of Father</td>
    <td>Post Office With pincode</td>
    <td>Name Of Local body</td>
    <td>Village</td>
    <td>Thaluk</td>
    <td>Cast</td>
    <td>Religion</td>
    <td>Panchayat Name</td>
    <td>Aadhar No</td>
    <td>Phone No</td>
    <td>File</td>
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
         <td><?php echo $row->name;?></td>
         <td><?php echo $row->age;?></td>
         <td><?php echo $row->gender;?></td>
         <td><?php echo $row->fname;?></td>
         <td><?php echo $row->pin;?></td>
         <td><?php echo $row->local;?></td>
         <td><?php echo $row->village;?></td>
         <td><?php echo $row->taluk;?></td>
         <td><?php echo $row->cast;?></td>
         <td><?php echo $row->religion;?></td>
         <td><?php echo $row->panchayath;?></td>
         <td><?php echo $row->aadharno;?></td>
         <td><?php echo $row->phno;?></td>
         <td><?php echo $row->file;?></td>
         
         
         <?php
         if($row->status==1)
         {
             ?>
             <td>Approved</td>
             <td><a href="<?php echo base_url()?>Main/Caste_reject/<?php echo $row->c_id;?>" >Reject</a></td>
             <?php
         }
         elseif($row->status==2)
         {
             ?>
             <td>Rejected</td>
             <td><a href="<?php echo base_url()?>Main/Caste_approve/<?php echo $row->c_id;?>" >Approve</a></td>
             <?php
         }
         else{
             ?>
            <td><a href="<?php echo base_url()?>Main/Caste_approve/<?php echo $row->c_id;?>" >Approve</a></td>
            <td><a href="<?php echo base_url()?>Main/Caste_reject/<?php echo $row->c_id;?>" >Reject</a></td>
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