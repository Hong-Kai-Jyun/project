<?php
$Number=array('1','2','3','+','4','5','6','-','7','8','9','*','清除','0','x');
$i=count($Number);
for($j=0 ; $j<$i ; $j++){
    echo '第 '.$j.' 圈 : '.$Number[$j] ;
//　echo '第 '.$j.' 圈 : '.$Number[$j] ;
//echo $Number[$j]/4;
 if($Number[$j] / 4 == 0)
   echo '<br>';
}
?>