<!-- 
isset() to check existence of any key in array. 
-->
<?php
include("connection.php");
?>
<?php
print_r($_REQUEST);
if(isset($_REQUEST["btn1"]))
{
    $num1=$_REQUEST["t1"];
    $num2=$_REQUEST["t2"];
    $num3=$num1+$num2;
    $action="addition";
    
    $insert="insert into calculation values('','$num1','$num2','$num3','$action')";
    //   echo $insert;
    mysqli_query($conn,$insert);


    //echo $num3;
   header("location:first.php?a=$num1&b=$num2&c=$num3");
}
if(isset($_REQUEST["btn2"]))
{
    $num1=$_REQUEST["t1"];
    $num2=$_REQUEST["t2"];
    $num3=$num1-$num2;
    $action="subtraction";
    
    $insert="insert into calculation values('','$num1','$num2','$num3','$action')";
 //   echo $insert;
    mysqli_query($conn,$insert);


    //echo $num3;
   header("location:first.php?a=$num1&b=$num2&c=$num3");
}
?>

<!-- 
query string
-->