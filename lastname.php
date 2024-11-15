<?php
session_start();
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
    print_r($_POST);
    if(isset($_POST["t1"]))
    {
        $_SESSION["fn"]=$_POST["t1"];
       
    }
    ?>
<form action="" name="f2" method="post">
    <table>
        <tr>
            <th>FirstName</th>
            <td>
            <?php  echo $_SESSION["fn"]; ?>
            </td>
        </tr>

        <tr>
            <th>Enter Last Name</th>
            <td>
                <input type="text" name="t2" value="<?php echo $_SESSION["ln"] ?>">
            </td>
        </tr>

        <tr>
            <td>
                <a href="javascript:SubmitForm('firstname.php')">Prev</a>
            </td>
        </tr>
    </table>
</form>
<script>
    function SubmitForm(url)
    {
        //alert(url)
        document.f2.action=url
        document.f2.submit()
    }
</script>
</body>
</html>