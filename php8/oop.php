<?php
class car{
  public $Model="";
  public $Engine="";

  public function setModel($newVal){
    $this->Model=$newVal;
  }
  public function getModel(){
    return "The car model is " .$this->Model.".<br>";
  }
}
class compact extends car{
  public function setSeat($newVal){
    $this->seat=$newVal;
  }
  public function getSeat(){
    return "Number of seat is ".$this->seat.".<br>";
  }
}
class mpv extends car{
  private $minSeat="0";
  private $maxSeat="0";
  public function setSeat($min,$max){
    $this->minSeat=$min;
    $this->maxSeat=$max;
  }
  public function getSeat(){
    return "Number of seats are between ".$this->minSeat." and ".$this->maxSeat.".<br>";
  }
}

$car1=new compact;
$car1->setModel("Vios");
echo $car1->getModel();
$car1->setSeat("5");
echo $car1->getSeat();

$car2=new mpv;
$car2->setModel("Myvi");
echo $car2->getModel();
$car2->setSeat(5,7);
echo $car2->getSeat();
?>