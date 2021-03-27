<!DOCTYPE html>
<head>
<title>salary bill</title>
<style>
.bi{
	
	background-image:url("../img/3.jpg");
	background-size:cover;
    
	}
div{
background-color:rgba(0,0,0,0.4);
width:450px;
height:auto;
text-align:center;
padding:10px;
margin-left:450px;
border:2px solid;
margin-top:60px;
}
form,input{
        
        padding:10px;
        margin:10px;
    }
</style>
<body class="bi">
<div>
<form method="POST" action="add_bill" enctype="multipart/form-data">
<h1>upload Salary Bill</h1>

Employee name:<input type="text" name="name" ></br>
Designation:<input type="text" name="designation" ></br>
upload salary bill:<input type="file" name="file"></br>
<input type="submit" value="upload">
</form>
</div>
</body>
</head>
</html>