<?php
$result=87;
$grade="A";
$name="XiaoBao";
echo"Hello, ".$name;
if($result>=50){
  //echo".<br>Your grade is ".$grade." with result ".$result."<br>You are passed.";
  echo".<br>Your grade is $grade with result $result <br>You are passed.<br><br>";
}else{
  echo".<br>Your grade is ".$grade." with result ".$result."<br>You are failed.<br><br>";
}

for($a=1;$a<10;$a++){
  echo"<br>The number is $a<br>";
}
$car=array("Volvo","BMW","Toyota");
echo"<br>I like ".$car[0].", ".$car[1]." and ".$car[2].".<br>";

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo"Peter is ".$age['Peter']." years old.<br><br>";
//echo"Peter is $age['Peter'] years old.<br>"; //error

$cars=array(
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Toyota",5,2),
  array("Honda",17,15)
);
echo $cars[0][0].":<br> In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br><br>";
echo $cars[1][0].":<br> In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br><br>";
echo $cars[2][0].":<br> In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br><br>";
echo $cars[3][0].":<br> In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br><br>";

?>