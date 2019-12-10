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
    print "</p>y的加持:".$y."</p>";
    return $y;
  }
  //別再發動  act_y($x);
  
  print "</p>什麼加持其實是".$y;
  $y=act_y($x);
  print "</p>y的繼承(回傳)".$y;
  
  define('p', 3.1415926);
  $pp = 3*3* p;
  print "</p>圓周率:".$pp;

  $w = 3000;
  $break = 2500;
  print "青眼白龍攻擊力比黑魔導大:".$w <=> $break;
  print "黑魔導攻擊力比青眼白龍小:".$break <=> $w;
  print "潘多拉黑魔導跟黑魔導相比攻擊力差距:".$break <=> $break;
?>
</body>
</html>