<?php
	$numArray = array(1,2,5,4,3,7,9,3,8,2,4,8,9,6,4,3,2,1);
	foreach ($numArray as $value) {
		print $value;
		print "\n";
	}
	foreach ($numArray as $key => &$value) { //using the '&' would change the values in the array
		$value = $value + 1;
	}
	print "new values!\n";
	print_r($numArray);

	$a = array(
		"keys:" => "values:",
    "first_Value" => 1,
    "second_Value" => 2,
    "third_Value" => 3,
    "Seventin_(key)" => 17
);
	foreach ($a as $key => $value) {
		print "\$a[$key] => $value \n";
	}
?>