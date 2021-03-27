<html>
<head>
<title></title>
</head>
<style>
/*body{
    width:400px;
    height:200px;
    text-align:center;
    padding:20px;
   
}*/
div{
	border:1px  solid black;
    width:300px;
    height:300px;
	text-align:center;
	background-color:rgba(0,0,0,0.4);
	padding:5px;
	margin-left:500px;
    
    margin-top:150px;


}


.bi{
	background-image:url(../images/31.jpg);
	background-size:cover;
	
  }
  h1{
  text-align:center;
  }
  .in{
      margin-top:80px;
  }
</style>
<body class="bi">

    <form method="post" action="<?php echo base_url()?>Main/notif">
    <h1>Add Notification</h1>
    <div>
        Notification:<textarea class="in" type="notification" name="notification" ></textarea></br></br>
        <input type="submit">
        </div>
        <a href="<?php echo base_url();?>Main/teachhomes">back to home</a>
    </form>
</body>
</html>