<?php
abstract class human {
  public function sleep(){
      echo '睡';
  }
}
class boy extends human {
  public function move(){
      echo '跑';
  }
}
class girl extends human{
  public function move()
  {
      echo '移動';
  }
}
class human{
  public function actionMove(Animal $obj)
  {
      $obj->move();
  }
}

$boy = new boy();
$girl = new girl();
$action = new Action();
$action->actionMove($boy);
$action->actionMove($girl);
?>