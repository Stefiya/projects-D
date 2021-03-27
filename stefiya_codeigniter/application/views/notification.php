<html>
<head>
<title</title>
<style>
.bi{
	
	background-image:url("../img/nottify.png");
	background-size:cover;
    margin-left:40px;
    text-align:center;      
    padding:20px;
    margin-top:100px;
	}

</style>
</head>
<body class="bi">
<form action="<?php echo base_url()?>Main/notification1" method="post">

<h1> Add Notification here!</h1>
Notification:<textarea type="text" name="notify"></textarea><br><br>

<input type="submit" value="submit">

</body>
</html>
