 <?php
include("connection.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
   // echo $id;
    $select_id="select * from signup where id=$id";
   // echo $select_id;
    $result_id=mysqli_query($conn,$select_id);
    //print_r($result_id);
    $p=mysqli_fetch_array($result_id);
   //echo  $p[1];
}
if(isset($_GET["aid"]))
{
    $aid=$_GET["aid"];
    // echo $id;
    $update_aid="update signup set status='approved' where id=$aid";
   // echo $select_aid;
    mysqli_query($conn,$update_aid);
  
}
if(isset($_GET["uid"]))
{
    $uid=$_GET["uid"];
    // echo $id;
    $update_uid="update signup set status='unapproved' where id=$uid";
   // echo $select_aid;
    mysqli_query($conn,$update_uid);
}
?>
<form action="signcode.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <th>Username</th>
        <td>
            <input type="text" name="user" value="<?php echo @$p[1] ?>">
        </td>
    </tr>

    <tr>
        <th>password</th>
        <td>
            <input type="password" name="pass" value="<?php echo @$p[2] ?>">
        </td>
    </tr>

    <tr>
        <th>Country</th>
        <td>
            <select name="cntry" id="">
                <option value="">--select any--</option>
                <option value="india"<?php if(@$p[3]=="india") echo "selected" ?>>india</option>
                <option value="usa" <?php if(@$p[3]=="usa") echo "selected" ?>>usa</option>
                <option value="uk" <?php if(@$p[3]=="uk") echo "selected" ?>>uk</option>
            </select>
        </td>
    </tr>

    <tr>
        <th>State</th>
        <td>
            <select name="state" id="">
                <option value="">--select any--</option>
                <option value="Haryana" <?php if(@$p[4]=="Haryana") echo "selected" ?>>Haryana</option>
                <option value="california" <?php if(@$p[4]=="california") echo "selected" ?>>california</option>
                <option value="perth" <?php if(@$p[4]=="perth") echo "selected" ?>>perth</option>
            </select>
        </td>
    </tr>


    <tr>
        <th>City</th>
        <td>
            <select name="city" id="">
                <option value="">--select any--</option>
                <option value="Ynr" <?php if(@$p[5]=="Ynr") echo "selected" ?>>Ynr</option>
                <option value="juma" <?php if(@$p[5]=="juma") echo "selected" ?>>juma</option>
                <option value="lumia" <?php if(@$p[5]=="lumia") echo "selected" ?>>lumia</option>
            </select>
        </td>
    </tr>

    <tr>
        <th>Gender</th>
        <td>
            <input type="radio" name="gender" value="Gents" <?php if(@$p[6]=="Gents") echo "checked" ?>>Male
            <input type="radio" name="gender" value="Ladies" <?php if(@$p[6]=="Ladies") echo "checked" ?>>Female
        </td>
    </tr>

    <tr>
        <th>
            Hobbies
            <?php
                 $val=explode(",",@$p[7]);
            ?>
        </th>
        <td>
            <input type="checkbox" name="chk[]" value="khelo"<?php if(in_array("khelo",$val)) echo "checked" ?>>Play
            <input type="checkbox" name="chk[]" value="padho" <?php if(in_array("padho",$val)) echo "checked" ?>>Read
            <input type="checkbox" name="chk[]" value="likho" <?php if(in_array("likho",$val)) echo "checked" ?>>write
            <input type="checkbox" name="chk[]" value="sojao" <?php if(in_array("sojao",$val)) echo "checked" ?>>Sleep
        </td>
    </tr>

    <tr>
        <th>
            Dob
        </th>
        <td>
            <input type="date" name="dob" value="<?php echo @$p[8] ?>">
        </td>
    </tr>

    <tr>
        <th>Upload photo</th>
        <td>
            <input type="file" name="f1"><?php echo @$p[9] ?>
        </td>
    </tr>

    <tr>
        <th>Address</th>
        <td>
            <textarea name="address" id=""><?php echo @$p[10] ?></textarea>
        </td>
    </tr>

 
    <tr>
        <td>
            <input type="submit" name="btn" value="Click Here">
            <input type="submit" name="btn1" value="UPDATE">
            <input type="submit" name="btn2" value="DELETE">
            <input type="hidden" name="hid" value="<?php echo @$p[0] ?>">
        </td>
    </tr>
</table>
</form>

 <table border=4>
    <tr>
        <th>SRNO</th>
        <th>NAME</th>
        <th>PASS</th>
        <th>COUNTRY</th>
        <th>STATE</th>
        <th>CITY</th>
        <th>GENDER</th>
        <th>HOBBIES</th>
        <th>DATE OF BIRTH</th>
        <th>PHOTO</th>
        <th>ADDRESS</th>
        <th>ACTION</th>
        <th>status</th>
        <th>Change Status</th>
    </tr>
<?php
$select="select * from signup";
$result=mysqli_query($conn,$select);
print_r($result);
while($col=mysqli_fetch_array($result))
{
?>
    <tr>
        <td><?php echo $col[0] ?></td>
        <td><?php echo $col[1] ?></td>
        <td><?php echo $col[2] ?></td>
        <td><?php echo $col[3] ?></td>
        <td><?php echo $col[4] ?></td>
        <td><?php echo $col[5] ?></td>
        <td><?php echo $col[6] ?></td>
        <td><?php echo $col[7] ?></td>
        <td><?php echo $col[8] ?></td>  
        <td>
            <img src="images/<?php echo $col[9] ?>" width="50px" height="50px" alt="">
        </td>
        <td>
            <?php echo $col[10] ?>
        </td>
       
        <td>
            <a href="signup.php?id=<?php echo $col[0] ?>">EDIT</a>
        </td>
        <td><?php echo $col[11] ?></td>
        <td>
            <a href="signup.php?aid=<?php echo $col[0] ?>">Approved</a>
            <a href="signup.php?uid=<?php echo $col[0] ?>">UnApproved</a>
        </td>
    </tr>
<?php
}
?> 
</table>
    
</body>
</html>