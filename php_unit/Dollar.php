<?php
  class Dollar{
    public $amount;
    public function __construct($amount){
      $this->amount = $amount;
    }
    public function times($ratio){
      return new Dollar((int)round($this->amount * $ratio));
    }
    public function equals($other){
      return $this->amount === $other->amount;
    }
  }
?>
