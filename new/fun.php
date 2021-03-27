<?php
#$num=[1,2,3,4];
#echo $num[3]."<br>";
#$num= array("name"=>"anju","age"=>23);
#echo $num['name'];
#$mult_array=[[1,2,3],[4,5,6],[7,8,9]];
#print_r($mult_array[0]);
$mult_array=[[1,2,3],[4,5,6],[7,8,9]];
foreach($mult_array as $array_index=>$inner_array)
{
	foreach($inner_array as $value)
{
	echo "$value";
}
echo "</br>";
}
?>