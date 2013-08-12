<?php
	class MyClass {
		public $var = "Hello World!";
		public $var2;
	}
	function myFunction(MyClass $foo){ //declare variables inside the function that accepts "class"
		$foo->var2 = "Bye Bye Bye!!!";
		echo $foo->var . "\n";
		echo $foo->var2 . "\n";
	}
	$myclass = new MyClass;
	myFunction($myclass);
?>