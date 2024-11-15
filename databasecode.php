<?php
session_start();
?>
<?php
include("connection.php");
?>
<?php
print_r($_POST);
if(isset($_POST["btn"]))
{
    $user=$_POST["t1"];
    $pass=base64_encode($_POST["t2"]);
  //  echo $user."  ".$pass;
    $select="select * from signup where username='$user' and password='$pass'";
  //  echo $select;
    $result=mysqli_query($conn,$select);
  //  print_r($result);
    if(mysqli_num_rows($result)>0) 
    {
        $data=mysqli_fetch_array($result);
        //echo $data[11];
       
       if($data[11]=="unapproved")
       {
        echo "<script>alert('u are unapproved user contact to admin')</script>";
        echo "<script>window.location.href='login.php'</script>";
       }

       else 
       {
        $_SESSION["un"]=$user;
        header("location:welcome.php");
       }
    }
    else 
    {
        header("location:login.php?msg=invalid username and password");
    }
}
?>