  <?php
    include "dog.php";
    $mydog = new dog();
    $mydog->age = 90;
    echo "我的狗年紀 : ".$mydog->getAge();
  ?>