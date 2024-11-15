<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<table>
<?php
$no=0;
$arr = array("a"=>"C is programming language","b"=>"C++ is a oops language","c"=>"javascript is a scripting language" );
foreach($arr as $j=>$l)
{
  // echo $k." ".$v;
  $no++;

?> 
<tr>
  <th>
    <?php
    echo "Question".$no."   ";
    echo $l;
    ?>
  </th>
</tr>

<tr>
  <td>
    <span>Answer</span>
    <input type="radio" name="r<?php echo $no; ?>"> TRUE
    <input type="radio" name="r<?php echo $no; ?>"> FALSE
  </td>
</tr>

<?php
}
?>
  </table> 
</body>
</html>