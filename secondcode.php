<?php
include("connection.php");
?>
<?php
if(isset($_POST["btn1"]))
{
$user=$_POST["t1"];
$pass=$_POST["t2"];
$select="select * from signup where username='$user' and password='$pass'";
echo $select;
$result=mysqli_query($conn,$select);
print_r($result);
if(mysqli_num_rows($result)>0)
{
    header("location:welcome.php");
}
else 
{
    header("location:second.php");
}
}
?>