<html>
<head>
<title></title>
<style>
    .bi{
    background-image:url("../images/noti3.png");
    background-size:cover;
    }
    textarea{
        padding:50px;
        margin:10px;
        text-align:center;
       
    }
    input{
        padding:10px;
        margin:10px;
        text-align:center;
    }
    div{
        border:2px solid black;
        text-align:center;
        padding:20px;
        width:400px;
        height:250px;
        background-color:rgba(0,0,0,0.6);
        color:white;
        margin-left:440px;
        margin-top:50px;
        }
        td{
            color:white;
            font-size:20px;
        }
    h2{
        text-align:center;
        margin-top:40px;
    }
</style>
</head>
<body class="bi">
   
    <form method="post" action="<?php echo base_url()?>Main/add_notification">
   
    <h2>NOTIFICATION</h2>
        <div>
        <table>
        Notification:<textarea  type="text" name="notification" placeholder="notification"></textarea></td><br>
        <input type="submit" value="submit">
        </table>
        </div>
    </form>
</body>
</html>
