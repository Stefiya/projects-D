<html>
<head>
<title></title>
<style>
    table,th,tr,td{
    border:2px solid;
    border-collapse:collapse;
    padding:10px;
    }
</style>
</head>
<body>
    <form method="post" action="<?php echo base_url()?>Main/approvedetails">
    
    
<table>
<thead>
    <tr>
        <th>name</th>
        <th>address</th>
        <th>gender</th>
        <th>age</th>
        <th>email</th>
        <th colspan="2">Action</th>
    </tr>
    <?php
    if($n->num_rows()>0)
    {
        foreach($n->result() as $row)
        {
            ?>
            <tr>
                <td><?php echo $row->name;?></td>
                <td><?php echo $row->address;?></td>
                <td><?php echo $row->gender;?></td>
                <td><?php echo $row->age;?></td>
                <td><?php echo $row->email;?></td>
                <?php
                if($row->status==1)
                { ?>
                    <td>approved</td>
                    <td><a href="<?php echo base_url()?>Main/rejectdetails/<?php echo $row->id;?>">reject</a></td>
                    <?php
                    }
                    elseif($row->status==2)
                    {
                        ?>
                        <td>rejected</td>
                        <td><a href="<?php echo base_url()?>Main/approvedetails/<?php echo $row->id;?>">approve</a></td>
                        <?php
                        }
                        else{
                            ?>
                         <td><a href="<?php echo base_url()?>Main/approvedetails/<?php echo $row->id;?>">approve</a></td>
                         <td><a href="<?php echo base_url()?>Main/rejectdetails/<?php echo $row->id;?>">reject</a></td>
                         <?php
                       }
                       ?>
                       </tr>
            <?php
        }
    }
    else
    {
        ?>
        <tr>
            <td>no data found</td>
    </tr>
    <?php
    }

    ?>
</thead>
</table>
</form>
</body>
</html>
