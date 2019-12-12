<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>html加入php程式語法</title>
</head>
<body>

  <table>
         <tr>
             <th>學生</th>
             <th>分數</th>
         </tr>
         <tr>
             <td>stell</td>
             <td>85</td>
         </tr>
         <tr>
             <td>alivc</td>
             <td>80</td>
         </tr>
  </table>
   
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
  print "</p>青眼白龍攻擊力比黑魔導大:";
  print $w <=> $break;
  print "</p>黑魔導攻擊力比青眼白龍小:";
  print $break <=> $w;
  print "</p>潘多拉黑魔導跟黑魔導相比攻擊力差距:";
  print $break <=> $break;
  /*
  print "</p>青眼白龍攻擊力比卡通青眼白龍相比攻擊力差距:". $w <=> $w;
  print "</p>青眼白龍攻擊力比卡通青眼白龍相比攻擊力差距:".$w<=>$w;
  echo "</p>青眼白龍攻擊力比卡通青眼白龍相比攻擊力差距:".$w<=>$w;
  */
  $p = "</p>青眼白龍攻擊力比卡通青眼白龍相比攻擊力差距:";
  print $p;
  print $w<=>$w;

  $duelbox["青眼白龍"] = 3000;
  $duelbox[1] = 0;

  $duelbox["黑魔導"] = 3000;
  echo "</p>".$duelbox; 
  echo "</p>".$duelbox["青眼白龍"];
  echo "</p>".$duelbox[1];

  $duelbox[0][1] = "青眼亞龍";
  echo "</br>".$duelbox[0][1];
  $lunch[1]=array("廣東粥"=>80,"炸雞排"=>70);
  echo "</br>".$lunch[1];
  echo "</br>".$lunch["廣東粥"];



  //if ($duelbox["青眼白龍"] > $duelbox["黑魔導"] ){
    if ( 3000 > 2500){
     echo "</br>LP:-500 POINT";
  }
  else{
     echo "</br>SAVE!";
      }

  if ($duelbox["青眼白龍"] > $duelbox["黑魔導"] ){
      echo "</br>LP:-500 POINT";
   }
   else{
      echo "</br>SAVE!";
       }


  //$i = 100;
  if( $x > 100)
  {
      echo "\$x 大於100";
  }elseif( $x < 100){
      echo "\$x 小於100";
  }else{
      echo "\$x 剛好100";
  }

  $fruit = "Apple";
  switch($fruit){
    case "apple":
      echo "這是 apple";
      break;
    case "banana":
      echo "這是 banana";
      break;
    default:
      echo "打錯字了嗎";
  }
  
  $start = 0 ;
  for ($i = 0 ; $start <=10 ; $i++)
  {
    print "*";
    $i+=$i;
  }
  $i = 20;
  while( $i >= 1)
  {
    print "*";
    $i--;
  }

  ?>
</body>
</html>