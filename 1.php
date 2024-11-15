<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>
<?php
$ques=array("c is programming langauge","c++ is oops langauge","javascript is scripting langauge","kdjfkdjkdjf kdfjkdjf");
print_r($ques);
$size=sizeof($ques);
echo $size;
?>

<body>
  <table>
    <tr>
      <th>SRNO</th>
      <th>QUESTION</th>
      <th>ANSWER</th>
    </tr>
    <?php
    $sr=101;
for($i=0;$i<$size;$i++)
{

?>
    <tr>
      <td><?php echo $sr++ ?></td>
      <td><?php echo $ques[$i] ?></td>
      <td>
        <input type="radio" name='r1'>True
        <input type="radio" name='r2'>False
      </td>
    </tr>
    <?php
}
?>


  </table>
</body>

</html>