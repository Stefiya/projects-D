<html>
<head>
<title></title>
<style>
.bi{
	margin-left:40px;
    text-align:center;      
    padding:20px;
    margin-top:100px;
	}
</style>
</head>
<body class="bi">
<form action="<?php echo base_url()?>new1/viewcomplaint" method="post">

<h1> Add complaints here!</h1>

subject:<textarea type="text" name="subject"></textarea><br><br>
complaint:<textarea type="text" name="compalint"></textarea><br><br>
<input type="submit" value="submit">
</body>
</html>