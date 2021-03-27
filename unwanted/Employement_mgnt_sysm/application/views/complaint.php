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
	background-color:rgba(0,0,0,0.7);
	padding:5px;
	margin-left:500px;
    color:white;
    font-size:20px;
    margin-top:100px;


}


.bi{
	background-image:url(../images/noti2.png);
	background-size:cover;
	
  }
  h1{
  text-align:center;
  margin-top:90px;
  text-decoration:underline;
  }
  .in{
      margin-top:80px;
  }
</style>
<body class="bi">

    <form method="post" action="<?php echo base_url()?>Main/notif">
    <h1>Add Complaint</h1>
    <div>
        Complaint:<textarea class="in" type="complaint" name="complaint" ></textarea></br></br>
        <input type="submit">
        </div>
        <a href="<?php echo base_url();?>Main/">back to home</a>
    </form>
</body>
</html>