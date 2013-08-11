<?php
require_once "Dollar.php";
  
class DollarTest extends PHPUnit_Framework_TestCase{
   public function testConstructor() {
      //$this->fail();
      $dollar = new Dollar(1);
      $this->assertEquals(1, $dollar->amount);//assert that statements that must be true 
      
   }
   public function testTimes(){
     $oneDollar = new Dollar(1);
     $threeDollars = new Dollar(3);
     $fiveDollars = new Dollar(5);
     $tenDollars = new Dollar(10);
     $this->assertEquals($fiveDollars, $oneDollar->times(5));
     $this->assertTrue($fiveDollars->amount === $tenDollars->times(.5)->amount);
     $this->assertTrue($threeDollars->amount === $fiveDollars->times(.5)->amount);//objects must be the same
     $this->assertTrue($fiveDollars->equals($oneDollar->times(5)));
     $this->assertTrue($tenDollars->equals($fiveDollars->times(2)));
     $this->assertTrue($fiveDollars->equals($tenDollars->times(.5)));   
}
   public function testEquals(){
     $oneDollar = new Dollar(1);
     $twoDollar = new Dollar(2);
     $oneBuck = new Dollar(1);
    
     $this->assertTrue($oneDollar->equals($oneBuck));
     $this->assertTrue($oneBuck->equals($oneDollar));
     $this->assertFalse($oneDollar->equals($twoDollar));
  }

}
?>
