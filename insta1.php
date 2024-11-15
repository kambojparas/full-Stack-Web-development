<?php
include("connection.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="conn.css">
</head>
<body>
    <?php
    // print_r($_REQUEST);
    $Email=@$_POST["Email"];
    $name=@$_POST["name"];
    $user=@$_POST["user"];
    $pass=@$_POST["pass"];
    
    if(isset($_POST["btn"]))
    {
            $insert="insert into college values('','$Email','$name','$user','$pass')";
            // echo $insert;
            mysqli_query($conn,$insert);
            header("location:insta1.php");
    }   

    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
     //   echo $id;
        $select_id="select * from college where id=$id";
      //  echo $select_id;
        $result_id=mysqli_query($conn,$select_id);
        //print_r($result_id);
        $col=mysqli_fetch_array($result_id);
      //  echo $col[1];   

    }
    
    
      //  echo $Email."  ".$name."   ".$user."  ".$pass; 
    

    if(isset($_POST["btn1"]))
    {
        // echo "update";
        print_r($_POST);
        $hid=$_POST["hid"];
        //echo $hid;
        $update="update college set Email='$Email', name='$name',user='$user',pass='$pass' where id=$hid";
        mysqli_query($conn,$update);
        header("location:insta1.php");
    }

 if(isset($_POST["btn2"]))
 {
 //print_r($_POST);
 $hid=$_POST["hid"];
 $delete="delete from college where id=$hid";
 mysqli_query($conn,$delete);
 header("location:insta1.php");
//  echo $hid;
}

  
    ?>
    <form action="" method="Post">
    <section>
        <div class="main">
            <div class="first">
                <i data-visualcompletion="css-img" aria-label="Instagram" class="" role="img" style="background-image: url(&quot;https://static.cdninstagram.com/rsrc.php/v3/yM/r/8n91YnfPq0s.png&quot;); background-position: 0px -52px; background-size: auto; width: 175px; height: 51px; background-repeat: no-repeat; display: inline-block;"></i>
            </div>
            <div class="fb">
                <img src="12.png" alt="">
                <h5>Login with Facebook</h5>
            </div>
            <span>
                <p>_________________________</p>
                OR
                <p>__________________________</p>
            </span>
            <div class="second">
                <input type="text" name="Email" placeholder="Mobile number, or Email" value="<?php echo @$col[1] ?>">
                <input type="text" name="name" placeholder="Fullname" value="<?php echo @$col[2] ?>">
                <input type="text" name="user" placeholder="Username" value="<?php echo @$col[3] ?>">
                <input type="password" name="pass" placeholder="Password" value="<?php echo @$col[4] ?>">
                <input type="hidden" name="hid" value="<?php echo @$col[0] ?>">
                <button type="submit" name="btn">Signup</button>
                <button type="submit" name="btn1">UPDATE</button>
                <button type="submit" name="btn2">DELETE</button>
            </div>
        <div class="sub">
            <p>Have an account? <span>Login</span></p>
        </div>
</section>

        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">SRNO</th>
      <th scope="col">Email</th>
      <th scope="col">Name</th>
      <th scope="col">User</th>
      <th scope="col">Pass</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $srno=101;
    $select="select * from college";
    $result=mysqli_query($conn,$select);
    // print_r($result);
    while($col=mysqli_fetch_array($result))
    {
  ?>
  <tr>
        <td><?php echo $srno++ ?></td>
        <td><?php echo $col[1] ?></td>
        <td><?php echo $col[2] ?></td>
        <td><?php echo $col[3] ?></td>
        <td><?php echo $col[4] ?></td>

        <td>
            <a href="insta1.php?id=<?php echo $col[0] ?>">EDIT</a>
        </td>
    </tr>
<?php
}
?> 

  
  </tbody>
</table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
      
</form>
</body>
</html>