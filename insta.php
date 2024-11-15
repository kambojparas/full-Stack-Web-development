<?php
session_start();
?>
<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="conn.css">
</head>
<body>
<?php
    // print_r($_REQUEST)
  
    
    if(isset($_POST["btn"]))
    {
        $Email=@$_POST["Email"];
        $pass=@$_POST["pass"];
       // echo $Email."   ".$pass;
        $select="select * from college where Email='$Email' and pass='$pass'";
        // echo $select;
        $result=mysqli_query($conn,$select);
       // print_r($result);

        if(mysqli_num_rows($result)>0)
        {
            $_SESSION["email"]=$Email;
            // $data=mysqli_fetch_array($result);

            // if($data[1])
            header("location:welcome.php");
        }
        else
        {
           
            header("location:insta1.php");
        }
     //   header("location:insta.php");
    }   


    // if(isset($_GET["id"]))
    // {
    //     $id=$_GET["id"];
    //  //   echo $id;
    //     $select_id="select * from college where id=$id";
    //   //  echo $select_id;
    //     $result_id=mysqli_query($conn,$select_id);
    //     //print_r($result_id);
    //     $col=mysqli_fetch_array($result_id);
    //   //  echo $col[1];   

    // }
    
    
        // echo $Email."    ".$pass; 
    

//     if(isset($_POST["btn1"]))
//     {
//         // echo "update";
//         print_r($_POST);
//         $hid=$_POST["hid"];
//         //echo $hid;
//         $update="update college set Email='$Email', name='$name',user='$user',pass='$pass' where id=$hid";
//         mysqli_query($conn,$update);
//         header("location:insta1.php");
//     }

//  if(isset($_POST["btn2"]))
//  {
//  //print_r($_POST);
//  $hid=$_POST["hid"];
//  $delete="delete from college where id=$hid";
//  mysqli_query($conn,$delete);
//  header("location:insta1.php");
// //  echo $hid;
// }
 ?>
<form action="" method="post">
    <section>
        <div class="main">
            <div class="first">
            <i data-visualcompletion="css-img" aria-label="Instagram" class="" role="img" style="background-image: url(&quot;https://static.cdninstagram.com/rsrc.php/v3/yM/r/8n91YnfPq0s.png&quot;); background-position: 0px -52px; background-size: auto; width: 175px; height: 51px; background-repeat: no-repeat; display: inline-block;"></i>
            </div>
            <div class="second">
                <input type="text" name="Email" placeholder="Phone number, Username, or Email" value="">
                <input type="password" name="pass" placeholder="Password" value="">
                <button type="submit" name="btn">Login</button>
                <div class="fb">
                    <img src="12.png" alt="">
                    <h5>Login with Facebook</h5>
                </div>
                <span>
                    <p>_________________________</p>
                    OR
                    <p>__________________________</p>
                </span>
                <small>Forgot password?</small>
            </div>
        </div>
        <div class="sub">
            <p>Don't have an account? <span>Signup</span></p>
        </div>
        <div class="apps">
            <p>Get the app.</p>
            <div class="images">
                <img src="c5Rp7Ym-Klz.jpeg" alt="">
                <img src="EHY6QnZYdNX.jpeg" alt="">
            </div>   
        </div>

        <div class="footer">
            <span>Meta</span>
            <span>About</span>
            <span>Blog</span>
            <span>Jobs</span>
            <span>Help</span>
            <span>API</span>
            <span>Privacy</span>
            <span>Terms</span>
            <span>Top Accounts</span>
            <span>Hashtags</span>
            <span>Locations</span>
            <span>Instagram Lite</span>
            <span>Contact Uploading & Non-Users</span>
            <select>
                <option value="">English</option>
                <option value="">Hindi</option>
                <option value="">Marathi</option>
            </select>
            <span>&copy; 2022 Instagram from Meta</span>
        </div>
    </section>
    </form>
</body>
</html>