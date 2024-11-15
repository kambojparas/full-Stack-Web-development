<?php
session_start()
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
    if(isset($_POST["t2"]))
    {
        $_SESSION["ln"]=$_POST["t2"];
       
    }
    ?>
<form action="" name="f1" method="post">
<table>
    <tr>
        <th>Enter First Name</th>
        <td>
            <input type="text" name="t1" value="<?php echo $_SESSION["fn"] ?>">
        </td>
    </tr>

    <tr>
        <td>
            <a href="javascript:SubmitForm('lastname.php')">Next</a>
        </td>
    </tr>
</table>
</form>
<script>
    function SubmitForm(url)
    {
        //alert(url)
        document.f1.action=url
        document.f1.submit()
    }
</script>
</body>
</html>