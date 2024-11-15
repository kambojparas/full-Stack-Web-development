<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="logincode.php" method="post"> 
<table>
    <tr>
        <th>Username</th>
        <td>
            <input type="text" name="t1">
        </td>
    </tr>

    <tr>
        <th>Password</th>
        <td>
            <input type="text" name="t2">
        </td>
    </tr>

    <tr>
        <td>
            <input type="submit" name="btn" value="LOGIN">
        </td>
    </tr>

    <tr>
        <td colspan=2>
            <?php
            if(isset($_GET["msg"]))
            {
                $message=$_GET["msg"];
                echo $message;
            }
            ?>
        </td>
    </tr>
</table>
</form>
</body>
</html>