<?php
	function fourth($num) //calculated the fourth degree of the $num
	{
		return ($num * $num * $num * $num);
	}
	
	$a = array(1,2,3,4,5,6,7);
	$b = array_map("fourth", $a);
	print_r($b);

/* ---------------------------------------- */

	function concat($str) //making all letters in the string UPPERCASE
	{
		return strtoupper($str);
	}
	
	$str = array("Bob","Matt","Tom","Alex","Michael");
	$out = array_map("concat", $str);
	print_r($out);
?>