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
  

  for ($i = 0 ; $i <=10 ; $i++)
  {
    print "*</br>";
    $i+=1;
  }   print "</br>";
  $i = 20;
  while( $i >= 1)
  {
    print "*";
    $i--;
  }print "</br>";
  
print "<table border=1>";
print "<tr>";
for($i=2 ; $i<10 ; $i++)
{ 
 print "<th>".$i."的倍數</th>";
} print "</tr>";
 print "<tr>";
 for($i=1 ; $i<10 ; $i++)
 { 
  print "<tr>";
   for($j=2 ; $j<10 ;$j++)
   {
    print "<td>";
    // print "</br>".$j;
     printf("%d*%d=%d \t",$j,$i,($i * $j));
     //print "</br>";
     print "</td>";
   }
   //print $i;
   print "</tr>";

 }
print "</table>";



  // 顯示名字
  function name(){
      echo "DODO";
  }

  // 計算成績等級
  function score($i) {
      $j = "F";
      $level = intval($i / 10);
      switch ($level){
          case 10:
            $j = "S";
          break;
          case 9:
            $j = "A";
            break;
          case 8:
            $j = "B";
            break;
          case 7:
            $j = "C";
            break;
          case 6:
            $j = "D";
            break;
          default:
            $j = "E";
      }
      return $j;
  }

  echo name();
  $backscore = score(100);
  echo "　成績等級：$backscore";

  function sum(...$numbers){
    $total = 0;
    foreach ($numbers as $i){
        $total += $i;
    }
    return $total;
}

echo "</br>總共是：".sum(1,2,3);

print "<table border=1>";
function table99($i=2,$j=1){
  echo "<tr>";
  if ($j > 9){
    $i++;
    $j = 1;
    echo "</tr>";
  }
  if ( $i <= 9 ){
    echo "<td>";
    printf("%d*%d=%d \t",$i,$j,($i*$j));
    echo "</td>";
    $j++;
    table99($i,$j);
  }
}
print "</table>";
echo table99();
?>

</body>
</html>