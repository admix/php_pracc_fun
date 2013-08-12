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


/* Simple example "filtering only even numbers"*/

function even($num){
	if($num % 2 == 0){
		return true;
	}
	else{
		return false;
	}
}
$arrayOfNumbers = array(1,2,3,4,5,6,7,8,9,10,11,134,112,223,543,123,98,26);

$evenNumbers = array_filter($arrayOfNumbers,"even");
print "Even Numbers:\n";
print_r($evenNumbers);

function odd($num){
	if($num % 2 != 0){
		return true;
	}
	else{
		return false;
	}
}

$oddNumbers = array_filter($arrayOfNumbers,"odd");
print "Odd Numbers:\n";
print_r($oddNumbers);
?>

