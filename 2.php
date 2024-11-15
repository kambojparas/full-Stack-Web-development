<!-- 
numeric array
associate array
mutlidimesional array 
-->
<?php
$numeric=array("c","c++","web","DSA");
// echo $numeric;
//print_r($numeric);
$size=sizeof($numeric);
//echo $size;
for($i=0;$i<$size;$i++)
{
  echo $numeric[$i]."<hr>";
}
?>