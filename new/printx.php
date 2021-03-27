<?php
$n=5
	for($i=1;$i<=2*$n;$i++)
	{
	for($j=1;$j<2*$n;$j++)
	{
	if($i==$j || $i+$j==2*$n)
	{
	echo"*"
	}
	echo"<br>"
	}
	}
?>