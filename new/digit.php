<?php
$num=123;
$r;
$sum=0;
while($num)
{
$r=$num%10;
$num=$num/10;
$sum=$sum+$r;
}
echo"sum of digits is".$sum;
?>