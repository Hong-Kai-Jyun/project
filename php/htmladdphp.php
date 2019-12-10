<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>html加入php程式語法</title>
</head>
<body>
  <?php
  print "Hello World";
  $x = 100;
  $y = 0;
  function act_y($x)
  {
    $y = $x*2; 
    print "y的加持:".$y;
    return $y;
  }
  act_y($x);
  echo "<b></b>";
  print "</p>什麼加持其實是".$y;
?>
</body>
</html>