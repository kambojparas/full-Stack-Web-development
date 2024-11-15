<?php
$multi=array("RollNO"=>array("101","102","103"),"Name"=>array("Raman","kamal","judw"),"City"=>array("ynr","judw","ambala"));
//print_r($multi);
foreach($multi as $key=>$val)
{
  //echo $val."<hr>";
  foreach($val as $a=>$c)
  {
    echo $c."<hr>";
  }
}
?>

<!-- 
array with in array is called multi array
-->