<?php
$n=10;
$count=0;
for($i=2;$i<=$n/2;$i++)
{
if($n%$i==0)
$count=1;
}
if($count==0)
{
echo "it is prime number";
}
else
{
echo "it is not prime number";
}
?> 
