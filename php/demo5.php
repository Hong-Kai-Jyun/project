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
class action{
  public function actionMove(human $obj)
  {
      $obj->move();
  }
}

$boy = new boy();
$girl = new girl();
$action = new action();
$action->actionMove($boy);
$action->actionMove($girl);
?>