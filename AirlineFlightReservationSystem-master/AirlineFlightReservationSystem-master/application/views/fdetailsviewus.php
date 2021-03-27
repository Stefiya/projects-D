<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="css/style.css">
            <style>
  nav{
    font-size: 20px;
    background-color: rgba(0,0,0,0.8);
    
    text-align: center;
    
  }
  body{
  background-image:url("../img/13.jpg");
background-size:cover;
}
.menubar ul{
  list-style:none;
  display:inline-flex;
  padding:5px;
  margin-top: 0px;
  font-size: 20px;
}
.menubar ul li a{
  color:white;
  text-decoration:none;
  padding:10px;
}
.menubar ul li{
     padding:15px;
}
.menubar ul li a:hover{
  background-color:red;
  display:block;
  border-radius:10px;
}
.submenu1 {
  display:none;
  margin:10px;
}
.submenu2 {
  display:none;
  margin:10px;
}
.menubar ul li:hover .submenu1 {
  display:block;
  position:absolute;
  background-color:rgba(0,0,0,0.5);
  border-radius:20px;
}
.menubar ul li:hover .submenu2 {
  display:block;
  position:absolute;
  background-color:rgba(0,0,0,0.5);
  border-radius:20px;
}
.submenu1  ul{
  display:block;
}
.submenu1 ul li{
  border-bottom:2px solid red;
}
.submenu2  ul{
  display:block;
}
.submenu2 ul li{
  border-bottom:2px solid red;
}
.h2
{
  text-align: center;
  margin-top: 20px;
  font-size: 50px;
  
}
.head{
text-align:center;
color: rgba(0,0,0,0.7);
}
table,td,tr
{
  border: 1px solid white;
  border-collapse: collapse;
}
</style>

</head>
<body class="bi ">
  <nav class="menubar">
    <nav class=" navbar navbar-expand-lg top1">
      <div class="container-fluid">
        <a class="text-decoration-none text-white" href="#"><h1><h4>AFRS-USER</h4></h1></a>
      <div>
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/user">Home</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/searchflight">Booking</a>
          <li class="nav-item"> <a class="nav-link" href="#">Profile</a>
            <div class="submenu1">
        <ul>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/regupdate"">update</a></li>
        </ul>
      </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#">VIEW</a>
            <div class="submenu2">
              <ul>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/viewbookinguser">Booking Details</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/ticket">Ticket view</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/viewnotif">View Notification</a></li>
              </ul>
            </div>
          </li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url()?>main/logout">Logout</a></li>
    
            </ul> 
          </ul>
        </div>
      </div>
    </nav>
  </div>
</nav>
<table  style=" " class="mt-5 bg-dark text-white">
<tr>
<th>flight no</th>
<th>flight Name</th>
<th>Departure</th>
<th>Arrival</th>
<th>Departure Date</th>
<th>Arrival Date</th>
<th>Departure Time</th>
<th>Arrival Time</th>
<th>Cost First class</th>
<th>Cost Economic class</th>
<th>Cost Buisness class</th>
<th>firstclass seatcapacity</th>
<th>economicclass seatcapacity</th>
<th>Buisnessclass seatcapacity</th>
<th>firstclass seatavailability</th>
<th>economicclass seatavailability</th>
<th>Buisnessclass seatavailability</th>
<th>Action</th>


</tr>


<?php

if($n->num_rows()>0)
{
foreach ($n->result() as $row)
{
?>
<tr>
<td><?php echo $row->fno;?></td>
<td><?php echo $row->fname;?></td>
<td><?php echo $row->departure;?></td>
<td><?php echo $row->arrival;?></td>
<td><?php echo $row->depdate;?></td>
<td><?php echo $row->arrdate;?></td>
<td><?php echo $row->deptime;?></td>
<td><?php echo $row->arrtime;?></td>
<td><?php echo $row->costfirst;?></td>
<td><?php echo $row->costeconomic;?></td>
<td><?php echo $row->costbuisness;?></td>
<td><?php echo $row->cfirst;?></td>
<td><?php echo $row->ceconomic;?></td>
<td><?php echo $row->cbuisness;?></td>
<td><?php echo $row->afirst;?></td>
<td><?php echo $row->aeconomic;?></td>
<td><?php echo $row->abuisness;?></td>

<?php if($row->status==1)
{
 ?>
<td><a>Flight Cancelled</a></td>
<?php
}
elseif($row->afirst<=0 && $row->aeconomic<=0 && $row->abuisness<=0)
{
	?>
 <input type="hidden" name="id" value="<?php echo $row->id;?>">
<td><a>Booking closed</a></td>
<!--<td><a href="<?php echo base_url()?>main/deletedetails<?php echo $row->bid;?>">Delete</a></td> -->
<?php
}
else
{
	?>
<input type="hidden" name="id" value="<?php echo $row->id;?>">
<td><a href="<?php echo base_url()?>main/bookflight/<?php echo $row->id;?>">Book Now</a></td>
</tr>
<?php
}
}
}
else
{
?>
<tr>
<td>No Data Found</td>
</tr>
<?php
}

?>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
</table>
</body>
</html>