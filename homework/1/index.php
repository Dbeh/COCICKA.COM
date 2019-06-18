<?php
  class Worker
  {

    public $name;

    public $age;

    public $salary;


}

  $w1 = new Worker();
  $w1->name = 'Иван';
  $w1->age = 25;
  $w1->salary = 1000;


  $w2 = new Worker();
  $w2->name = 'Вася';
  $w2->age = 26;
  $w2->salary = 2000;

  echo ($w1->salary+$w2->salary);
  echo "<br>";
  echo ($w1->age+$w2->age);

?>
