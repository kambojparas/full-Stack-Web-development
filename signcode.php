 <?php
include("connection.php");
?> 
<?php
// print_r($_POST);
// print_r($_FILES);
$user=$_POST["user"];
$pass=$_POST["pass"];
$country=$_POST["cntry"];
$state=$_POST["state"];
$city=$_POST["city"];
$gender=$_POST["gender"];
$hobbies=implode("-",$_POST["chk"]);
$date=$_POST["dob"];
$photo=$_FILES["f1"]["name"];
$size=$_FILES["f1"]["size"];
$address=$_POST["address"];
$status="unapproved";
$changestatus="unapproved";
$changestatus="approved";
if(isset($_POST["btn"]))
{

     if(move_uploaded_file($_FILES["f1"]["tmp_name"],"images/$photo"))
     {
        $insert="insert into signup values('','$user','$pass','$country','$state','$city','$gender','$hobbies','$date','$photo','$address','$status')";
    //    // echo $insert;
        mysqli_query($conn,$insert);
         header("location:signup.php");
     }
  //  echo $user."  ".$pass."   ".$country."  ".$state."  ".$city."   ".$gender."   ".$hobbies."   ".$date."   ".$photo."   ".$size."   ".$address."  ".$status."  ".$changestatus;
}
if(isset($_POST["btn1"]))
{
    print_r($_POST);
    $hid=$_POST["hid"];
    //echo $hid;

    if(!move_uploaded_file($_FILES["f1"]["tmp_name"],"images/$photo"))
    {
    $update="update signup set username='$user', password='$pass',country='$country',state='$state',city='$city',gender='$gender',hobbies='$hobbies',dob='$date',address='$address',status='$status' where id=$hid";
    mysqli_query($conn,$update);
    header("location:signup.php");
    }
    else{
        $update="update signup set username='$user',password='$pass',country='$country',state='$state',city='$city',gender='$gender',hobbies='$hobbies',dob='$date',photo='$photo',address='$address',status='$status' where id=$hid";
        mysqli_query($conn,$update);
        header("location:signup.php");
    }
}
if(isset($_POST["btn2"]))
{
 //print_r($_POST);
 $hid=$_POST["hid"];
 $delete="delete from signup where id=$hid";
 mysqli_query($conn,$delete);
 header("location:signup.php");
//  echo $hid;
}

 ?>