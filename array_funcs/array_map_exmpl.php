<?php
	function fourth($num) //calculated the fourth degree of the $num
	{
		return ($num * $num * $num * $num);
	}

	$a = array(1,2,3,4,5,6,7);
	$b = array_map("fourth", $a);
	print_r($b);
?>