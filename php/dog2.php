 <?php
  class dog{

    public $name;
    public $color;
    public $style;

    public function __construct($name,$color,$style){
         $this->name = $name;
         $this->color = $color;
         $this->style = $style;
    }
   // echo $name ;

    public function dogRun(){
        echo "狗狗跑步中...";
    }

    public function dogBark(){
        echo "狗狗叫...";
    }

    public function __destruct(){
        echo "狗狗回家了...";
    }

  }
  ?>