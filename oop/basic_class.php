<?php
	class Animal{
		public $sound;
		public $name;
		public $country;
		public $size;
		public function __construct($sound = NULL, $name = NULL, $country = NULL, $size = "small"){
			$this->sound = $sound;
			$this->name = $name;
			$this->country = $country;
			$this->size = $size;
		}
		public function action($sound){

		}
		public function getName(){
			return $this->name;
		}
		public function getSound(){
			return $this->sound;
		}
		public function getCountry(){
			return $this->country;
		}
		public function setCountry($country){
			if($this->name == "Jack"){
				$this->country = $country;
			}else{
				$this->country = "Ukraine";
			}
		}
		public function __toString(){
			$str = "";
			if($this->name){
				$str .= $this->name;
			}
			if($this->sound){
				if(strlen($str) > 0){
					$str .= " can ";
				}
				$str .= $this->sound;
			}
			if($this->country){
				if(strlen($str) > 0){
					$str .= " and he is from: ";
				}
				else{
					$str .= "Something is from: ";
				}
				$str .= $this->country;
			}
			return $str;
		}

	}
		$dog = new Animal("Woof","Jack");
		//print_r($dog);
		$dog->setCountry("USA");
		//print_r($dog);		
		$dogName = $dog->getName();
		print "Dog's name is " . $dogName;
		print "\nAnd he is from " . $dog->getCountry();
		print "\n". $dog->getName() . " can make a noise of " . $dog->getSound();
		print "\n";
		print $dog . "\n";
		$cat = new Animal();
		$cat->setCountry("France");
		print_r($cat);
		print $cat;
?>
<?php

?>