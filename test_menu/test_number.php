<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
function Number(){
  $Number=array('1','2','3','+','4','5','6','-','7','8','9','*','清除','0','x');
  $i=count($Number);
  for($j=0 ; $j<$i ; $j++){
    echo "<button>".$Number[$j]."</button>" ;
//　echo '第 '.$j.' 圈 : '.$Number[$j] ;
//echo $Number[$j]/4;
/*echo '$j:' .$j;
echo '$j%4='.($j+1)%4;*/

   if(($j+1) % 4 == 0)
     echo '<br>';
    }
}
//Number();
?>