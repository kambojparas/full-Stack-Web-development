<?php
session_start();
?>
<?php
echo "welcome"."   ". $_SESSION["email"];
// if(!isset($_SESSION["un"]))
// {
//     header("location:first.php");
// }
// else{
//     echo "weclome"."  ".$_SESSION["un"];
// }
  
?>