<?php
$arrayOfNames = array("Madonna","Carlos","Argentino","Gilberto","Violetta","Alexander","Alexey",
											"Emma","Margarita","Joanna","William","Katherine");

/* Filter only names with 'a' in the end! */

print "Names:\n";
print_r($arrayOfNames);
print "\n";

$newNames = array_filter($arrayOfNames, function($name){
	$allnames = explode(" ", $name); 
	$name_with_a_in_the_end = array_filter($allnames, function($separateName){
		if($separateName[strlen($separateName) - 1] == 'a'){ //checking the last letter
			return $separateName; 
		}
	});
	return $name_with_a_in_the_end;
});
print "Names with 'a' in the end!\n";
print_r($newNames);

?>

