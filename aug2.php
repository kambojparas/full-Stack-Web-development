<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$a=@$_GET["a"];

$b=@$_GET["b"];
$c=@$_GET["c"];
?>

<form action="firstcode.php" method="post">
    <table>
        <tr>
            <th>Number1</th>
            <td>
                <input type="text" name="t1" value="<?php echo $a ?>">
            </td>
        </tr>

        <tr>
            <th>Number2</th>
            <td>
                <input type="text" name="t2" value="<?php echo $b ?>">
            </td>
        </tr>

        <tr>
            <th>Result</th>
            <td>
                <input type="text" name="t3" value="<?php echo $c ?>">
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" name="btn1" value="+">
                <input type="submit" name="btn2" value="-">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<!-- 

page->server->request  form-element name 
page<-response<-server

by default get method

get/post

request
-->